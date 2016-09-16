/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.dao.classes;

import edu.esprit.dao.interfaces.IParentDAO;
import edu.esprit.entities.Parent;
import edu.esprit.technique.MyConnection;
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
 * @author Karray
 */

public class ParentDAO implements IParentDAO {

    private Connection connection;

    private ParentDAO() {
        connection = MyConnection.getInstance();
    }

    public void insertParent(Parent parent) {
        String requete = "insert into parent (cin_parent,nom_parent,prenom_parent,adresse_parent,numtel_parent,mail_parent,nb_enfant,info_enfant,description) values (?,?,?,?,?,?,?,?,?)";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, parent.getCinParent());
            ps.setString(2, parent.getNomParent());
            ps.setString(3, parent.getPrenomParent());
            ps.setString(4, parent.getAdresseParent());
            ps.setInt(5, parent.getNumTel());
            ps.setString(6, parent.getMail());
            ps.setInt(7, parent.getNbEnfant());
            ps.setString(8, parent.getInfoEnfant());
            ps.setString(9, parent.getDescription());
            ps.executeUpdate();
            System.out.println("Le parent a ete ajouté avec succes");
        } catch (SQLException ex) {
            Logger.getLogger(ParentDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void updateParent(Parent p) {
        String requete = "update parent set cin_parent=? , nom_parent=? ,prenom_parent=?,adresse_parent=?,numtel_parent=?,mail_parent=?,nb_enfant=?,info_enfant=?,description=? where id_parent=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, p.getCinParent());
            ps.setString(2, p.getNomParent());
            ps.setString(3, p.getPrenomParent());
            ps.setString(4, p.getAdresseParent());
            ps.setInt(5, p.getNumTel());
            ps.setString(6, p.getMail());
            ps.setInt(7, p.getNbEnfant());
            ps.setString(8, p.getInfoEnfant());
            ps.setString(9, p.getDescription());
            ps.setInt(10, p.getIdParent());
            ps.executeUpdate();
            System.out.println("Mise à jour effectuée avec succès");
        } catch (SQLException ex) {
            
            System.out.println("erreur lors de la mise à jour " + ex.getMessage());
        }
    }

    public void deleteParent(int id) {
        String requete = "delete from parent where id_parent=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ps.executeUpdate();
            System.out.println("parent supprimé");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la suppression " + ex.getMessage());
        }
    }

    public Parent findParentById(int id) {
        Parent parent = new Parent();
        String requete = "select * from parent where id_parent=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                parent.setIdParent(resultat.getInt(1));
                parent.setCinParent(resultat.getInt(2));
                parent.setNomParent(resultat.getString(3));
                parent.setPrenomParent(resultat.getString(4));
                parent.setAdresseParent(resultat.getString(5)); 
                parent.setNumTel(resultat.getInt(6));
                parent.setMail(resultat.getString(7)); 
                parent.setNbEnfant(resultat.getInt(8));
                parent.setInfoEnfant(resultat.getString(9));
                parent.setDescription(resultat.getString(10));
            }
            return parent;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche du parent " + ex.getMessage());
            return null;
        }
    }

    public Parent findParentByCin(int cin) {
        Parent parent = new Parent();
        String requete 
                = "select * from parent where cin_parent=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, cin);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                parent.setIdParent(resultat.getInt(1));
                parent.setCinParent(resultat.getInt(2));
                parent.setNomParent(resultat.getString(3));
                parent.setPrenomParent(resultat.getString(4));
                parent.setAdresseParent(resultat.getString(5)); 
                parent.setNumTel(resultat.getInt(6));
                parent.setMail(resultat.getString(7)); 
                parent.setNbEnfant(resultat.getInt(8));
                parent.setInfoEnfant(resultat.getString(9));
                parent.setDescription(resultat.getString(10));
            }
            return parent;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche du parent " + ex.getMessage());
            return null;
        }
    }
    
    public Parent findParentByNom(int nom) {
        Parent parent = new Parent();
        String requete 
                = "select * from parent where nom_parent=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, nom);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                parent.setIdParent(resultat.getInt(1));
                parent.setCinParent(resultat.getInt(2));
                parent.setNomParent(resultat.getString(3));
                parent.setPrenomParent(resultat.getString(4));
                parent.setAdresseParent(resultat.getString(5)); 
                parent.setNumTel(resultat.getInt(6));
                parent.setMail(resultat.getString(7)); 
                parent.setNbEnfant(resultat.getInt(8));
                parent.setInfoEnfant(resultat.getString(9));
                parent.setDescription(resultat.getString(10));
            }
            return parent;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche du parent " + ex.getMessage());
            return null;
        }
    }
    //
    public Parent findParentByAdresse(String adr) {
        Parent parent = new Parent();
        String requete = "select * from parent where adresseParent=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, adr);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                parent.setIdParent(resultat.getInt(1));
                parent.setAdresseParent(resultat.getString(2));
            }
            return parent;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche du parent " + ex.getMessage());
            return null;
        }
    }

    public List<Parent> DisplayAllParent() {
         
        List<Parent> listeParent = new ArrayList<Parent>();
        String requete = "select * from parent";
        System.err.println("    -----Liste des Parents---- ");
        try {
            
            Statement statement = connection.createStatement();
            ResultSet resultat = statement.executeQuery(requete);
            while (resultat.next()) {
                //Parent parent = new Parent();
              Parent p = new Parent(resultat.getInt(1),resultat.getInt(2),resultat.getString(3),resultat.getString(4),resultat.getString(5),resultat.getInt(6),resultat.getString(7),resultat.getInt(8),resultat.getString(9),resultat.getString(10));
             // parent.afficher();
              
              System.out.println("ID                      : "+resultat.getInt(1));
              System.out.println("CIN                     : "+resultat.getInt(2));
              System.out.println("NOM                     : "+resultat.getString(3));
              System.out.println("PRENOM                  : "+resultat.getString(4));
              System.out.println("ADRESSE                 : "+resultat.getString(5));
              System.out.println("NUM TEL                 : "+resultat.getInt(6));
              System.out.println("MAIL                    : "+resultat.getString(7));
              System.out.println("NB ENFANT               : "+resultat.getInt(8));
              System.out.println("INFO ENFANT             : "+resultat.getString(9));
              System.out.println("DESCRIPTION             : "+resultat.getString(10));
              listeParent.add(p);
                System.out.println("----------------------------------------------- ");
            }
            return listeParent;
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors du chargement des parents " + ex.getMessage());
            return null;
        }
    }
    private static IParentDAO iParentDao = null;

    public static IParentDAO getInstance() {
        if (iParentDao == null) {
            iParentDao = new ParentDAO();
        }
        return iParentDao;
    }
}
