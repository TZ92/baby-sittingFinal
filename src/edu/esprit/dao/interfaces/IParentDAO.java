/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.dao.interfaces;

import edu.esprit.entities.Parent;
import java.util.List;

/**
 *
 * @author mahdi
 */
public interface IParentDAO {

    void insertParent(Parent parent);

    void updateParent(Parent p);

    void deleteParent(int id);

    Parent findParentById(int id);

    Parent findParentByAdresse(String adr);

    List<Parent> DisplayAllParent();

    public Parent findParentByCin(int cin);

    public Parent findParentByNom(int parseInt);
}
