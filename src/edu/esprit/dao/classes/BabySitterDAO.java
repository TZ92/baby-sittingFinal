/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.dao.classes;

import edu.esprit.dao.interfaces.IBabySitterDAO;
import edu.esprit.entities.BabySittier;
import edu.esprit.technique.MyConnection;
import java.sql.Connection;
import java.sql.Date;
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
 * @author AhmedHa
 */

public class BabySitterDAO implements IBabySitterDAO {

    private Connection connection;

    private BabySitterDAO() {
        connection = MyConnection.getInstance();
    }

    public void insertBaby(BabySittier baby) {
         BabySittier baby1 = findBabyById(baby.getIdBaby());
       
         BabySittier baby2 = findBabyByCin(baby.getCinBaby());
        String requete = "insert into babysitter (id_babysitter,cin_babysitter,nom_babysitter,prenom_babysitter,adresse_babysitter,datenaiss_babysitter,numtel_babysitter,mail_babysitter) values (?,?,?,?,?,?,?,?)";
        try {
          if(baby1.getIdBaby()== baby.getIdBaby()||baby2.getCinBaby()==baby.getCinBaby()){
                System.out.println("Baby sitter existe deja !!");}
          else{
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, baby.getIdBaby());
            ps.setInt(2, baby.getCinBaby());
            ps.setString(3, baby.getNomBaby());
            ps.setString(4, baby.getPrenomBaby());
            ps.setString(5, baby.getAdresseBaby());
            ps.setString(6, baby.getDateNaissance());
            ps.setInt(7, baby.getNumTel());
            ps.setString(8, baby.getMail());	
            ps.executeUpdate();
            System.out.println("baby sitter a ete ajouter avec succes");
            }
        } catch (SQLException ex) {
            Logger.getLogger(BabySitterDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public void updateBaby(BabySittier baby) {
       
        String requete = "update babysitter set cin_babysitter=? , nom_babysitter=? ,prenom_babysitter=?,adresse_babysitter=?,datenaiss_babysitter=?,numtel_babysitter=?,mail_babysitter=? where id_babysitter=?";
        try {
           if(!isExiste(baby.getIdBaby()))
                   {
                       System.out.println("mise a jour impossible baby sitter n'existe pas ");
                   }
           else {
                PreparedStatement ps = connection.prepareStatement(requete);
                ps.setInt(1, baby.getCinBaby());
                ps.setString(2, baby.getNomBaby());
                ps.setString(3, baby.getPrenomBaby());
                ps.setString(4, baby.getAdresseBaby());
                ps.setString(5, baby.getDateNaissance());
                ps.setInt(6, baby.getNumTel());
                ps.setString(7, baby.getMail());
                ps.setInt(8, baby.getIdBaby());
                ps.executeUpdate();
            System.out.println("Mise à jour effectuée avec succès");
              
               
         
           }         
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la mise à jour " + ex.getMessage());
        }
    }

    public void deleteBaby(int id) {
        
        BabySittier baby1 = new BabySittier();
       
        String requete = "delete from babysitter where id_babysitter=?";
        try {
            if(!isExiste(id)){
                System.out.println("supression impossible ! baby sitter n'existe pas !!");}
            else{
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ps.executeUpdate();
            System.out.println("baby-sitter  supprimée");
                }
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la suppression " + ex.getMessage());
        }
    }

    public BabySittier findBabyById(int id) {
        BabySittier baby = new BabySittier();
        String requete = "select * from babysitter where id_babysitter=?";
        try {
            if(!isExiste(id))
                   {
                      // System.out.println("aucun baby sitter trouver !! ");
                   }
           else {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                baby.setIdBaby(resultat.getInt(1));
                baby.setCinBaby(resultat.getInt(2));
                baby.setNomBaby(resultat.getString(3));
                baby.setPrenomBaby(resultat.getString(4));
                baby.setAdresseBaby(resultat.getString(5)); 
                baby.setDateNaissance(resultat.getString(6)); 
                baby.setNumTel(resultat.getInt(7));
                baby.setMail(resultat.getString(8)); 
                
            }
           
            }
          
        }catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche du baby sitter " + ex.getMessage());
            return null;
        }
    
return baby;
    }
    public boolean isExiste(int id) {
        
        String requete = "select * from babysitter where id_babysitter=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, id);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
            if (resultat.getInt(1) == id){
            return true;
            }
            
            }
           } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche du baby sitter " + ex.getMessage());
           // return null;
        } 
        return false;
    }
    //
    public BabySittier findBabyByCin(int cin) {
        BabySittier baby = new BabySittier();
        String requete = "select * from babysitter where cin_babysitter=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, cin);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                baby.setIdBaby(resultat.getInt(1));
                baby.setCinBaby(resultat.getInt(2));
            }
            return baby;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche du baby sitter " + ex.getMessage());
            return null;
        }
    }

    public List<BabySittier> DisplayAllBabys() {
         System.err.println("    -----Liste des Baby-sitters---- ");
        List<BabySittier> listeBaby = new ArrayList<BabySittier>();
        String requete = "select * from babysitter";
        
        try {
            
            Statement statement = connection.createStatement();
            ResultSet resultat = statement.executeQuery(requete);
            while (resultat.next()) {
                BabySittier baby = new BabySittier();
              //BabySittier baby = new BabySittier(resultat.getInt(1),resultat.getString(2),resultat.getString(3),resultat.getString(4),resultat.getString(5),resultat.getString(6),resultat.getInt(7),resultat.getString(8));
              //baby.afficher();
              
              System.out.println("ID                      : "+resultat.getInt(1));
              System.out.println("CIN                     : "+resultat.getString(2));
              System.out.println("NOM                     : "+resultat.getString(3));
              System.out.println("PRENOM                  : "+resultat.getString(4));
              System.out.println("ADRESSE                 : "+resultat.getString(5));
              System.out.println("DATE NAISSANCE          : "+resultat.getDate(6));
              System.out.println("NUM TEL                 : "+resultat.getInt(7));
              System.out.println("MAIL                    : "+resultat.getString(8));
              listeBaby.add(baby);
                System.out.println("----------------------------------------------- ");
            }
            return listeBaby;
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors du chargement des baby sitter " + ex.getMessage());
            return null;
        }
    }
    private static IBabySitterDAO iBabyDao = null;

    public static IBabySitterDAO getInstance() {
        if (iBabyDao == null) {
            iBabyDao = new BabySitterDAO();
        }
        return iBabyDao;
    }

 
}
