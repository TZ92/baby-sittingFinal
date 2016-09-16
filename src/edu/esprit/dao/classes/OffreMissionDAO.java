

package edu.esprit.dao.classes;


import edu.esprit.dao.entities.Annonce;
import edu.esprit.dao.entities.OffreMission;
import edu.esprit.dao.interfaces.IOffreMissionDAO;
import edu.esprit.dao.technique.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;


public class OffreMissionDAO implements IOffreMissionDAO{
    
    private Connection connection;

    private OffreMissionDAO() {
        connection = MyConnection.getInstance();
    }

    public void insertOffreMission(OffreMission o) {

        String requete = "insert into Offre_mission (lieu_mission,date_debut,date_fin,horaire_garde,nombre_enfant) values (?,?,?,?,?)";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, o.getLieuMission());
            ps.setDate(2, o.getDateDebut());
            ps.setDate(3, o.getDateFin());
            ps.setString(4, o.getHoraireDeGarde());
            ps.setInt(5, o.getNombreEnfants());
            
            
            ps.executeUpdate();
            System.out.println("Ajout effectuée avec succès");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de l'insertion " + ex.getMessage());
        }
    }

    public void updateOffreMission(OffreMission o) {
        String requete = "update Offre_mission set lieu_mission=? , date_debut=? , date_fin=? , horaire_garde=? , nombre_enfant=? where id_offre=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, o.getLieuMission());
            ps.setDate(2, o.getDateDebut());
            ps.setDate(3, o.getDateFin());
            ps.setString(4, o.getHoraireDeGarde());
            ps.setInt(5, o.getNombreEnfants());
            ps.setInt(6, o.getIdOffre());
            
           
            ps.executeUpdate();
            System.out.println("Mise à jour effectuée avec succès");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la mise à jour " + ex.getMessage());
        }

    }

    public void deleteOffreMission(int id) {

        String requete = "delete from Offre_mission where id_offre=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ps.executeUpdate();
            System.out.println("Suppression effectuée avec succès");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la suppression " + ex.getMessage());
        }
    }

    public OffreMission findOffreMissionById(int id) {
           OffreMission offre = new OffreMission();
        String requete = "select * from offre_mission where id_offre=?";

        try {
            PreparedStatement ps = connection.prepareStatement(requete);
             ps.setInt(1, id);
            ResultSet resultat = ps.executeQuery();
          
            
            while (resultat.next()) {

                offre.setIdOffre(resultat.getInt(1));
                offre.setLieuMission(resultat.getString(2));
                offre.setDateDebut(resultat.getDate(3));
                offre.setDateFin(resultat.getDate(4));
                offre.setHoraireDeGarde(resultat.getString(5));
                offre.setNombreEnfants(resultat.getInt(6));
                
            }
            return offre;
        } catch (SQLException ex) {
            System.out.println("erreur lors du chargement" + ex.getMessage());
            return null;
        }
    }

    public List<OffreMission> DisplayAllOffreMissions() {

        List<OffreMission> listeOffres = new ArrayList<OffreMission>();

        String requete = "select * from Offre_mission";
        try {
            Statement statement = connection.createStatement();
            ResultSet resultat = statement.executeQuery(requete);

            while (resultat.next()) {
                OffreMission offre = new OffreMission(resultat.getInt(1),resultat.getString(2),resultat.getDate(3),resultat.getDate(4),resultat.getString(5),resultat.getInt(6));
                offre.afficher();
                listeOffres.add(offre);
            }
            return listeOffres;
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors du chargement des annonces " + ex.getMessage());
            return null;
        }
    }
    
    private static IOffreMissionDAO iOffreMissionDao;

    public static IOffreMissionDAO getInstance() {
        if (iOffreMissionDao == null) {
            iOffreMissionDao = new OffreMissionDAO();
        }
        return iOffreMissionDao;
    }

    @Override
    public OffreMission findOffreMissionByType(String type) {
        
     OffreMission offre = new OffreMission();
        String requete = "select * from offre_mission where lieu_mission=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, type);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                offre.setIdOffre(resultat.getInt(1));
                offre.setLieuMission(resultat.getString(2));
                offre.setDateDebut(resultat.getDate(3));
                offre.setDateFin(resultat.getDate(4));
                 offre.setHoraireDeGarde(resultat.getString(5));
                offre.setNombreEnfants(resultat.getInt(6));
                
            }
            return offre;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche de l'annonce " + ex.getMessage());
            return null;
        }
    }
    
    
    
    }

