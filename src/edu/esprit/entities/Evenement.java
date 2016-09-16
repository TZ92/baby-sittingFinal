/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

import java.sql.Date;

/**
 *
 * @author TuniZiano
 */
public class Evenement {
    private int idEvenement ;
    private String nomEvenement ;
    private String themeEvenement;
    private String afficheEvenement;
    private String adresseEvenement;
    private Date dateEvenement;
    private int nbPlaceMax;
    //List<Parent> ListeParents();

    public int getIdEvenement() {
        return idEvenement;
    }

    public void setIdEvenement(int idEvenement) {
        this.idEvenement = idEvenement;
    }

    public String getNomEvenement() {
        return nomEvenement;
    }
    public void setNomEvenement(String nomEvenement) {
        this.nomEvenement = nomEvenement;
    }

    public String getThemeEvenement() {
        return themeEvenement;
    }
    public void setThemeEvenement(String themeEvenement) {
        this.themeEvenement = themeEvenement;
    }

    public String getAfficheEvenement() {
        return afficheEvenement;
    }

    public void setAfficheEvenement(String afficheEvenement) {
        this.afficheEvenement = afficheEvenement;
    }

    
    
    public String getAdresseEvenement() {
        return adresseEvenement;
    }

    public void setAdresseEvenement(String adresseEvenement) {
        this.adresseEvenement = adresseEvenement;
    }

    public Date getDateEvenement() {
        return dateEvenement;
    }

    public void setDateEvenement(Date dateEvenement) {
        this.dateEvenement = dateEvenement;
    }

   

    public int getNbPlaceMax() {
        return nbPlaceMax;
    }
    public void setNbPlaceMax(int nbPlaceMax) {
        this.nbPlaceMax = nbPlaceMax;
    }

    public Evenement() {
    }

    public Evenement(int idEvenement, String nomEvenement, String themeEvenement, String adresseEvenement, int nbPlaceMax , String afficheEvenement  ,  Date dateEvenement ) {
        this.idEvenement = idEvenement;
        this.nomEvenement = nomEvenement;
        this.themeEvenement = themeEvenement;
        this.adresseEvenement = adresseEvenement;
        this.nbPlaceMax = nbPlaceMax;
        this.afficheEvenement= afficheEvenement;
        this.dateEvenement = dateEvenement;
       
    }

    public void afficher()
    {
        System.out.println("Id : " +idEvenement + " Nom : "+nomEvenement+" Theme : "+themeEvenement+" Adresse : "+adresseEvenement+" Nombre de places Maximal "+nbPlaceMax);
    }
}
