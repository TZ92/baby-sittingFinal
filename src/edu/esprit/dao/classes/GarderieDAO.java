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
import edu.esprit.dao.interfaces.IGarderieDAO;
import edu.esprit.entities.Garderie;
import edu.esprit.technique.MyConnection;

/**
 *
 * @author TuniZiano
 */
public class GarderieDAO implements IGarderieDAO {
    private Connection connection ;
    
    private GarderieDAO() 
    {
        connection = MyConnection.getInstance();
    }
    
    @Override
    public void insertGarderie(Garderie garderie) {
        String requete = "insert into garderie (nomGarderie,photoGarderie,adresseGarderie,numeroGarderie,urlGarderie) values (?,?,?,?,?)";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, garderie.getNomGarderie());
            ps.setString(2, garderie.getPhotoGarderie());
            ps.setString(3, garderie.getAdresseGarderie());
            ps.setInt(4, garderie.getNumeroGarderie());
            ps.setString(5, garderie.getUrlGarderie());
            ps.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(GarderieDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void updateGarderie(Garderie g) {
        String requete = "update garderie set nomGarderie=? photoGarderie=? adresseGarderie=? numeroGarderie=? urlGarderie=? where idGarderie=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1, g.getNomGarderie());
            ps.setString(2, g.getPhotoGarderie());
            ps.setString(3, g.getAdresseGarderie());
            ps.setInt(4, g.getNumeroGarderie());
            ps.setString(5, g.getUrlGarderie());
            ps.setInt(6, g.getIdGarderie());
            ps.executeUpdate();
            System.out.println("Mise effectuée avec succès");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("Une erreur est survenue lors de la mise à jour " + ex.getMessage());
        }
    }

    @Override
    public void deleteGarderie(int idGarderie) {
        String requete = "delete from garderie where idGarderie=?";
        try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1, idGarderie);
            ps.executeUpdate();
            System.out.println("Garderie supprimée");
        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("Une erreur est survenue lors de la suppression " + ex.getMessage());
        }
    }

    @Override
    public Garderie findGarderieById(int idGarderie) {
        
       Garderie garderie = new Garderie();
       String requete = "select * from garderie where idGarderie=?" ;
       try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setInt(1,idGarderie);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                garderie.setIdGarderie(resultat.getInt(1));
                garderie.setNomGarderie(resultat.getString(2));
                garderie.setPhotoGarderie(resultat.getString(3));
                garderie.setAdresseGarderie(resultat.getString(4));
                garderie.setNumeroGarderie(resultat.getInt(5));
                garderie.setUrlGarderie(resultat.getString(6));
            }
            return garderie;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche de la garderie " + ex.getMessage());
            return null;
        }
    }

    //

    @Override
    public Garderie findGarderieByNom(String nomGarderie) {
       Garderie garderie = new Garderie();
       String requete = "select * from garderie where nomGarderie=?" ;
       try {
            PreparedStatement ps = connection.prepareStatement(requete);
            ps.setString(1,nomGarderie);
            ResultSet resultat = ps.executeQuery();
            while (resultat.next()) {
                garderie.setIdGarderie(resultat.getInt(1));
                garderie.setNomGarderie(resultat.getString(2));
                garderie.setPhotoGarderie(resultat.getString(3));
                garderie.setAdresseGarderie(resultat.getString(4));
                garderie.setNumeroGarderie(resultat.getInt(5));
                garderie.setUrlGarderie(resultat.getString(6));
            }
            return garderie;

        } catch (SQLException ex) {
            //Logger.getLogger(PersonneDao.class.getName()).log(Level.SEVERE, null, ex);
            System.out.println("erreur lors de la recherche de la garderie " + ex.getMessage());
            return null;
        }
    }
    
     private static IGarderieDAO igarderieDao;

    public static IGarderieDAO getInstance() {
        if (igarderieDao == null) {
            igarderieDao = new GarderieDAO();
        }
        return igarderieDao;
    }
    
}
