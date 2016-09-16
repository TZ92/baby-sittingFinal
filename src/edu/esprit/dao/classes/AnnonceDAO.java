/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package edu.esprit.dao.classes;

import edu.esprit.dao.entities.Annonce;
import edu.esprit.dao.interfaces.IAnnonceDAO;
import edu.esprit.dao.technique.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Baccar
 */
public class AnnonceDAO implements IAnnonceDAO {
    
    
    
    private Connection connection;

    private AnnonceDAO() {
        connection = MyConnection.getInstance();
    }

  

    public void insertAnnonce(Annonce annonce) {
        String requete = "insert into Annonce (type_annonce,titre_annonce,sujet_annonce,date_annonce) values (?,?,?,?)";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, annonce.getTypeAnnonce());
            ps.setString(2, annonce.getTitreAnnonce());
            ps.setString(3, annonce.getSujetAnnonce());
            ps.setString(4, annonce.getDateAnnonce());  
            ps.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(AnnonceDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void updateAnnonce(Annonce a) {
        String requete = "update annonce set type_annonce=? ,titre_annonce=?,sujet_annonce=?,date_annonce=?  where id_annonce=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, a.getTypeAnnonce());
             ps.setString(2, a.getTitreAnnonce());
            ps.setString(3, a.getSujetAnnonce());
            ps.setString(4,a.getDateAnnonce());
            ps.setInt(5, a.getIdAnnonce());
            
            ps.executeUpdate();
            System.out.println("Mise à jour effectuée avec succès");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la mise à jour " + ex.getMessage());
        }
    }

    public void deleteAnnonce(int id) {
        String requete = " delete from annonce where id_annonce=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ps.executeUpdate();
            System.out.println("Annonce supprimée");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la suppression " + ex.getMessage());
        }
    }

    public Annonce findAnnonceById(int id) {
        Annonce annonce = new Annonce();
        String requete = "select * from annonce where Id_annonce=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ResultSet resultat = ps.executeQuery(); // retour de resultat
            while (resultat.next()) { //
                annonce.setIdAnnonce(resultat.getInt(1));
                annonce.setTypeAnnonce(resultat.getString(2));
                annonce.setTitreAnnonce(resultat.getString(3));
                annonce.setSujetAnnonce(resultat.getString(4));
                annonce.setDateAnnonce(resultat.getString(5));
                annonce.affiche();
            }
            return annonce;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche de l'annonce " + ex.getMessage());
            return null;
        }
    }

    //
    public Annonce findAnnonceByType(String type) {
        Annonce annonce = new Annonce();
        String requete = "select * from annonce where type_annonce=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, type);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                annonce.setIdAnnonce(resultat.getInt(1));
                annonce.setTypeAnnonce(resultat.getString(2));
                annonce.setTitreAnnonce(resultat.getString(3));
                annonce.setSujetAnnonce(resultat.getString(4));
                annonce.setDateAnnonce(resultat.getString(5));
            }
            return annonce;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche de l'annonce " + ex.getMessage());
            return null;
        }
    }

    public List<Annonce> DisplayAllAnnonces() {

        List<Annonce> listeAnnonces = new ArrayList<Annonce>();

        String requete = "select * from annonce";
        try {
            Statement statement = connection
                    .createStatement();
            ResultSet resultat = statement.executeQuery(requete);

            while (resultat.next()) {
                Annonce annonce = new Annonce(resultat.getInt(1),resultat.getString(2),resultat.getString(3),resultat.getString(4),resultat.getString(5));
               // annonce.setIdAnnonce(resultat.getInt(1));
                //annonce.setTypeAnnonce(resultat.getString(2));
                
                annonce.affiche();
                listeAnnonces.add(annonce);
            }
            return listeAnnonces;
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors du chargement des annonces " + ex.getMessage());
            return null;
        }
    }
    
    private static IAnnonceDAO iAnnonceDao;

    public static IAnnonceDAO getInstance() {
        if (iAnnonceDao == null) {
            iAnnonceDao = new AnnonceDAO();
        }
        return iAnnonceDao;
    }

   
     
    
}
