
package edu.esprit.dao.interfaces;

import edu.esprit.dao.entities.OffreMission;
import java.util.List;


public interface IOffreMissionDAO {

    /**
     *
     * @param o
     */
     void insertOffreMission(OffreMission o);

    void updateOffreMission(OffreMission o);

    void deleteOffreMission(int id);

    OffreMission findOffreMissionById(int id);

    OffreMission findOffreMissionByType(String type);

    List<OffreMission> DisplayAllOffreMissions();
    
}
