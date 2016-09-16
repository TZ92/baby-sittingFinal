/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.dao.classes;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import edu.esprit.dao.interfaces.IEvenementDAO;
import edu.esprit.entities.Evenement;
import edu.esprit.technique.MyConnection;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
/**
 *
 * @author TuniZiano
 */
public class EvenementDAO implements IEvenementDAO {
  private Connection connection ;
    
    private EvenementDAO() 
    {
        connection = MyConnection.getInstance();
    }

    @Override
    public void insertEvenement(Evenement evenement) {
       String requete = "insert into evenement (nomEvenement,themeEvenement,adresseEvenement,nbPlaceMax,afficheEvenement,dateEvenement) values (?,?,?,?,?,?)";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, evenement.getNomEvenement());
            ps.setString(2, evenement.getThemeEvenement());
            ps.setString(3, evenement.getAdresseEvenement());
            ps.setInt   (4, evenement.getNbPlaceMax());
            ps.setString(5, evenement.getAfficheEvenement());
            ps.setDate  (6, evenement.getDateEvenement());
            ps.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(EvenementDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void updateEvenement(Evenement e) {
         String requete = "update evenement set nomEvenement=? , themeEvenement=? ,  adresseEvenement=? , nbPlaceMax=?, dateEvenement=?  where idEvenement=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, e.getNomEvenement());
            ps.setString(2, e.getThemeEvenement());
            //ps.setString(3, e.getAfficheEvenement());
            ps.setString(3, e.getAdresseEvenement());
            ps.setInt   (4, e.getNbPlaceMax());
            
            ps.setDate   (5, e.getDateEvenement());
            ps.setInt   (6, e.getIdEvenement());
            ps.executeUpdate();
            System.out.println("Mise effectuée avec succès");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("Une erreur est survenue lors de la mise à jour " + ex.getMessage());
        }
    }

    @Override
    public void deleteEvenement(int idEvenement) {
        String requete = "delete from evenement where idEvenement=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, idEvenement);
            ps.executeUpdate();
            System.out.println("Evenement supprimée");
        } catch (SQLException ex) {
            Logger.getLogger(EvenementDAO.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("Une erreur est survenue lors de la suppression " + ex.getMessage());
        }
    }

    @Override
    public Evenement findEvenementById(int idEvenement) {
        Evenement evenement = new Evenement();
        String requete = "select * from evenement where idEvenement=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1,idEvenement);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                evenement.setIdEvenement(resultat.getInt(1));
                evenement.setNomEvenement(resultat.getString(2));
                evenement.setThemeEvenement(resultat.getString(3));
                evenement.setAdresseEvenement(resultat.getString(4));
                evenement.setNbPlaceMax(resultat.getInt(5));
                evenement.setAfficheEvenement(resultat.getString(6));
                evenement.setDateEvenement(resultat.getDate(7));
            }
            return evenement;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche de l'evenement " + ex.getMessage());
            return null;
        }
    }

    @Override
    public Evenement findEvenementByNom(String nomEvenement) {
        Evenement evenement = new Evenement();
        String requete = "select * from evenement where nomEvenement=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1,nomEvenement);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                evenement.setIdEvenement(resultat.getInt(1));
                evenement.setNomEvenement(resultat.getString(2));
                evenement.setThemeEvenement(resultat.getString(3));
                evenement.setAdresseEvenement(resultat.getString(4));
                evenement.setNbPlaceMax(resultat.getInt(5));
            }
            return evenement;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche de l'evenement " + ex.getMessage());
            return null;
        }
        
        
    }
    
    @Override
    public List<Evenement> DisplayAllEvenement() {
         List<Evenement> listeevenement = new ArrayList<Evenement>();

        String requete = "select * from evenement";
        try {
            Statement statement = connection
                    .createStatement();
            ResultSet resultat = statement.executeQuery(requete);

            while (resultat.next()) {
                Evenement evenement = new Evenement(resultat.getInt(1),resultat.getString(2),resultat.getString(3),resultat.getString(4) ,resultat.getInt(5) , resultat.getString(6) , resultat.getDate(7)  );
                
                
                listeevenement.add(evenement);
                evenement.afficher();
            }
            return listeevenement;
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors du chargement des depots " + ex.getMessage());
            return null;
        }
    }
    
    
    private static IEvenementDAO ievenementDao;
    public static IEvenementDAO getInstance() {
        if (ievenementDao == null) {
            ievenementDao = new EvenementDAO();
        }
        return ievenementDao;
    }   

   
}
