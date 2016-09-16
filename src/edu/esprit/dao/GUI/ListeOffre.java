/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package edu.esprit.dao.GUI;

import edu.esprit.dao.classes.OffreMissionDAO;
import edu.esprit.dao.entities.OffreMission;
import edu.esprit.dao.interfaces.IOffreMissionDAO;
import java.util.ArrayList;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Baccar
 */
public class ListeOffre extends AbstractTableModel{
     String [] header={"Id","Lieu ", "Date debut ","Date fin ","Horaire de garde ", "nombre d'enfants"};
    List<OffreMission> offres=new ArrayList<OffreMission>();
    
    public ListeOffre(){
        
        IOffreMissionDAO offredao = OffreMissionDAO.getInstance();
        offres=offredao.DisplayAllOffreMissions();
        offres.toString();
    }
     @Override
     public String getColumnName(int column) {
        return header[column];
    }
    @Override
    public int getRowCount() {
         return offres.size();
    }

    @Override
    public int getColumnCount() {
        return header.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
         switch(columnIndex){
            case 0: 
                return offres.get(rowIndex).getIdOffre();
            case 1: 
                return offres.get(rowIndex).getLieuMission();
            case 2: 
                return offres.get(rowIndex).getDateDebut();
            case 3: 
                return offres.get(rowIndex).getDateFin();
            case 4:
                return offres.get(rowIndex).getHoraireDeGarde();
            case 5:
                 return offres.get(rowIndex).getNombreEnfants();
           
            default:return null;
         }
    }
}
