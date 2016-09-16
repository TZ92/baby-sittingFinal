/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.dao.interfaces;

import edu.esprit.entities.Garderie;

/**
 *
 * @author TuniZiano
 */
public interface IGarderieDAO {
    void insertGarderie(Garderie garderie);
    void updateGarderie(Garderie g);
    void deleteGarderie (int idGarderie);
    Garderie findGarderieById(int idGarderie);
    Garderie findGarderieByNom(String nomGarderie);
    
}
