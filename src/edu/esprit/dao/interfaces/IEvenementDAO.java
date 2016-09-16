/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.dao.interfaces;

import edu.esprit.entities.Evenement;
import java.util.List;

/**
 *
 * @author TuniZiano
 */
public interface IEvenementDAO {
    void insertEvenement(Evenement evenement);
    void updateEvenement(Evenement e);
    void deleteEvenement(int idEvenement);
    Evenement findEvenementById (int idEvenement);
    Evenement findEvenementByNom (String nomEvenement);
    List<Evenement> DisplayAllEvenement();
    
}
