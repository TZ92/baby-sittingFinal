/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.dao.interfaces;

import edu.esprit.entities.BabySittier;
import java.util.List;

/**
 *
 * @author AhmedHa
 */
public interface IBabySitterDAO {

    void insertBaby(BabySittier depot);

    void updateBaby(BabySittier b);

    void deleteBaby(int id);

    BabySittier findBabyById(int id);
    public boolean isExiste(int id);

    BabySittier findBabyByCin(int cin);

    List<BabySittier> DisplayAllBabys();
}
