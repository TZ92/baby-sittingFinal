
package edu.esprit.dao.entities;


public class Annonce {
    
    
    
    
    
    private int idAnnonce ;
    private String typeAnnonce ;
    private String titreAnnonce ;
    private String sujetAnnonce ;
    private String dateAnnonce ;

    public Annonce(int idAnnonce, String typeAnnonce, String titreAnnonce ,String sujetAnnonce ,String dateAnnonce) {
        this.idAnnonce = idAnnonce;
        this.typeAnnonce = typeAnnonce;
       this.titreAnnonce=titreAnnonce;
        this.sujetAnnonce=sujetAnnonce;
        this.dateAnnonce = dateAnnonce;
        
    }

    

    public Annonce() {
        
    }
   
    public int getIdAnnonce() {
        return idAnnonce;
    }

    public void setIdAnnonce(int idAnnonce) {
        this.idAnnonce = idAnnonce;
    }

    
    public String getTypeAnnonce() {
        return typeAnnonce;
    }

    
    public void setTypeAnnonce(String typeAnnonce) {
        this.typeAnnonce = typeAnnonce;
    }

    
    public String getDateAnnonce() {
        return dateAnnonce;
    }

    
    public void setDateAnnonce(String dateAnnonce) {
        this.dateAnnonce = dateAnnonce;
    }
    
  public   void affiche()
    {
        System.out.println("ID"+idAnnonce+"\nTYPE"+typeAnnonce+"\nTITRE"+titreAnnonce+"\nSUJET"+sujetAnnonce+"\nDATE"+dateAnnonce);
    }

    
    public String getTitreAnnonce() {
        return titreAnnonce;
    }

    public void setTitreAnnonce(String titreAnnonce) {
        this.titreAnnonce = titreAnnonce;
    }

    public String getSujetAnnonce() {
        return sujetAnnonce;
    }

    
    public void setSujetAnnonce(String sujetAnnonce) {
        this.sujetAnnonce = sujetAnnonce;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
