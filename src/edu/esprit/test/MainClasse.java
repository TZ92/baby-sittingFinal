/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package edu.esprit.test;
import java.sql.Date;

import edu.esprit.dao.classes.AnnonceDAO;
import edu.esprit.dao.classes.OffreMissionDAO;
import edu.esprit.dao.entities.Annonce;
import edu.esprit.dao.entities.OffreMission;
import edu.esprit.dao.interfaces.IAnnonceDAO;
import edu.esprit.dao.interfaces.IOffreMissionDAO;

/**
 *
 * @author Baccar
 */
public class MainClasse {
    public static void main(String[] args) {
       // Annonce annonce = new Annonce();
        //annonce.setTypeAnnonce("aa");
        //annonce.setTitreAnnonce("titre1");
        //annonce.setSujetAnnonce("sujet1");
        //annonce.setDateAnnonce("122344");
        
        //IAnnonceDAO annoncedao = AnnonceDAO.getInstance();
       //annoncedao.insertAnnonce(annonce);
        //annoncedao.DisplayAllAnnonces();
       // annoncedao.deleteAnnonce(1);
        //annoncedao.findAnnonceById(4);
        
        
       // OffreMission offre = new OffreMission();
        //offre.setLieuMission("paris");
     // java.util.Date myDate = new java.util.Date("10/12/2010");
      //java.sql.Date sqlDate = new java.sql.Date(myDate.getTime());
       //offre.setDateDebut(sqlDate);
       
      // java.util.Date myDate2 = new java.util.Date("10/12/2010");
      //java.sql.Date sqlDate2 = new java.sql.Date(myDate2.getTime());
     //  offre.setDateDebut(sqlDate2);
        
      // offre.setDatefin(sqlDate2);
       
      // offre.setHoraireDeGarde("18-20");
      // offre.setNombreEnfants(2);
       
       
        //offre.afficher();
         
        IOffreMissionDAO offredao = OffreMissionDAO.getInstance();
      //  offredao.insertOffreMission(offre);
       int id=3;
      OffreMission o2= new OffreMission() ;
          o2=  offredao.findOffreMissionById(id);
          o2.afficher();
          
    }
    
   
}
