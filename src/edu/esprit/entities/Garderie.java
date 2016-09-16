/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

/**
 *
 * @author TuniZiano
 */
public class Garderie {
    private int idGarderie ;
    private String nomGarderie;
    private String photoGarderie;
    private String adresseGarderie;
    private int numeroGarderie ;
    private String urlGarderie ;

    public void setIdGarderie(int idGarderie) {
        this.idGarderie = idGarderie;
    }

    public int getIdGarderie() {
        return idGarderie;
    }
    
    public String getNomGarderie() {
        return nomGarderie;
    }
    public void setNomGarderie(String nomGarderie) {
        this.nomGarderie = nomGarderie;
    }

    public String getPhotoGarderie() {
        return photoGarderie;
    }
    public void setPhotoGarderie(String photoGarderie) {
        this.photoGarderie = photoGarderie;
    }   
    
    public String getAdresseGarderie() {
        return adresseGarderie;
    }
    public void setAdresseGarderie(String adresseGarderie) {
        this.adresseGarderie = adresseGarderie;
    }

    public int getNumeroGarderie() {
        return numeroGarderie;
    }
    public void setNumeroGarderie(int numeroGarderie) {
        this.numeroGarderie = numeroGarderie;
    }

    public String getUrlGarderie() {
        return urlGarderie;
    }
    public void setUrlGarderie(String urlGarderie) {
        this.urlGarderie = urlGarderie;
    }

    public Garderie() {
    }

    public Garderie(int idGarderie, String nomGarderie, String photoGarderie, String adresseGarderie, int numeroGarderie, String urlGarderie) {
        this.idGarderie = idGarderie;
        this.nomGarderie = nomGarderie;
        this.photoGarderie = photoGarderie;
        this.adresseGarderie = adresseGarderie;
        this.numeroGarderie = numeroGarderie;
        this.urlGarderie = urlGarderie;
    }

    
    
    @Override
    public String toString() {
        return super.toString(); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public int hashCode() {
        return super.hashCode(); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean equals(Object obj) {
        return super.equals(obj); //To change body of generated methods, choose Tools | Templates.
    }
    
}
