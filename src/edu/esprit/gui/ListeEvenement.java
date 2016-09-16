/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.dao.classes.EvenementDAO;
import edu.esprit.dao.interfaces.IEvenementDAO;
import edu.esprit.entities.Evenement;
import java.util.ArrayList;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author TuniZiano
 */
public class ListeEvenement extends AbstractTableModel {
    String [] header={"Id","Nom ", "Thème ","Adresse ","Date","Nombre de place "};
    List<Evenement> events=new ArrayList<Evenement>();
    
    public ListeEvenement()
    {
        IEvenementDAO evendao = EvenementDAO.getInstance();
        events=evendao.DisplayAllEvenement();
        events.toString();
    }
    
     @Override
    public String getColumnName(int column) {
        return header[column];
    }

    @Override
    public int getRowCount() {
        return events.size();
    }

    @Override
    public int getColumnCount() {
         return header.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        switch(columnIndex){
            case 0: 
                return events.get(rowIndex).getIdEvenement();
            case 1: 
                return events.get(rowIndex).getNomEvenement();
            case 2: 
                return events.get(rowIndex).getThemeEvenement();
            case 3: 
                return events.get(rowIndex).getAdresseEvenement();
            case 4:
                return  events.get(rowIndex).getDateEvenement();
            case 5:
                return events.get(rowIndex).getNbPlaceMax();
           
            default:
                return null;
   
    }   }
    
}
