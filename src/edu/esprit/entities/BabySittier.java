/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package edu.esprit.entities;


/**
 *
 * @author AhmedHa
 */
public class BabySittier {

      private int idBaby;
      private int cinBaby;
      private String nomBaby;
      private String prenomBaby;
      private String adresseBaby;
      private String dateNaissance;
      private int numTel;
      private String mail;

    public BabySittier() {
    }

    public BabySittier(int idBaby, int cinBaby, String nomBaby, String prenomBaby, String adresseBaby, String dateNaissance, int numTel, String mail) {
        this.idBaby = idBaby;
        this.cinBaby = cinBaby;
        this.nomBaby = nomBaby;
        this.prenomBaby = prenomBaby;
        this.adresseBaby = adresseBaby;
        this.dateNaissance = dateNaissance;
        this.numTel = numTel;
        this.mail = mail;
    }

    

    public String getAdresseBaby() {
        return adresseBaby;
    }

    public void setAdresseBaby(String adresseBaby) {
        this.adresseBaby = adresseBaby;
    }

    public int getIdBaby() {
        return idBaby;
    }

    public void setIdBaby(int idBaby) {
        this.idBaby = idBaby;
    }

    public int getCinBaby() {
        return cinBaby;
    }

   

    public void setCinBaby(int cinBaby) {
        this.cinBaby = cinBaby;
    }

    public String getNomBaby() {
        return nomBaby;
    }

    public void setNomBaby(String nomBaby) {
        this.nomBaby = nomBaby;
    }

    public String getPrenomBaby() {
        return prenomBaby;
    }

    public void setPrenomBaby(String prenomBaby) {
        this.prenomBaby = prenomBaby;
    }

    public String getDateNaissance() {
        return dateNaissance;
    }

    public void setDateNaissance(String dateNaissance) {
        this.dateNaissance = dateNaissance;
    }

    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }

    public int getNumTel() {
        return numTel;
    }

    public void setNumTel(int numTel) {
        this.numTel = numTel;
    }

   
    public void afficher()
    {
        System.out.println("ID              "+idBaby+"\nCIN                 "+cinBaby+"\nNOM                    "+nomBaby+"\nPRENOM                 "+prenomBaby+"\nADRESSE                 "+adresseBaby+"\nDATE NAISSANCE                 "+dateNaissance+"\nNUM TEL                  "+numTel+"\nMAIL                    "+mail);
    }
    

}
