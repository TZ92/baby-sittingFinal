

package edu.esprit.dao.entities;

import java.sql.Date;


public class OffreMission {
    
    private int idOffre ;
    private String lieuMission; 
    private Date dateDebut ;
    private Date dateFin ;
    private String HoraireDeGarde ;
    private int nombreEnfants;
    private String typeService ;
    

 public OffreMission(int idOffre,String lieuMission,Date dateDebut, Date DateFin,String horaireGarde , int nb ) {
        this.idOffre=idOffre ;
        this.lieuMission=lieuMission ;
        this.dateDebut=dateDebut ;
        this.dateFin=DateFin ;
       this.HoraireDeGarde=horaireGarde;
       
       this.nombreEnfants=nb;
       
       
       
    }

    public OffreMission() {
       
    }

    
    public int getIdOffre() {
        return idOffre;
    }

    
    public void setIdOffre(int idOffre) {
        this.idOffre = idOffre;
    }

    
    public String getLieuMission() {
        return lieuMission ;
    }

    
  

    /**
     * @return the dateDebut
     */
    public Date getDateDebut() {
        return dateDebut;
    }

    /**
     * @param dateDebut the dateDebut to set
     */
    public void setDateDebut(Date dateDebut) {
        this.dateDebut = dateDebut;
    }

    /**
     * @return the datefin
     */
    public Date getDateFin() {
        return dateFin;
    }

    /**
     * @param datefin the datefin to set
     */
    public void setDateFin(Date Datefin) {
        this.dateFin = Datefin;
    }

    public   void afficher()
    {
        System.out.println("ID : "+idOffre+"\nLieu de mission : "+lieuMission+"\nDate de Debut : "+dateDebut+"\nDate de Fin : "+dateFin);
    }

    
    public String getHoraireDeGarde() {
        return HoraireDeGarde;
    }

    /**
     * @return the nombreEnfants
     */
    public int getNombreEnfants() {
        return nombreEnfants;
    }

    

    /**
     * @param lieuMission the lieuMission to set
     */
    public void setLieuMission(String lieuMission) {
        this.lieuMission = lieuMission;
    }

    /**
     * @param HoraireDeGarde the HoraireDeGarde to set
     */
    public void setHoraireDeGarde(String HoraireDeGarde) {
        this.HoraireDeGarde = HoraireDeGarde;
    }

    /**
     * @param nombreEnfants the nombreEnfants to set
     */
    public void setNombreEnfants(int nombreEnfants) {
        this.nombreEnfants = nombreEnfants;
    }

   
   
}
