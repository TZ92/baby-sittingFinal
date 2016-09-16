

package edu.esprit.dao.interfaces;

import edu.esprit.dao.entities.Annonce;
import java.util.List;


public interface IAnnonceDAO {
    void insertAnnonce(Annonce annonce);

    void updateAnnonce(Annonce a);

    void deleteAnnonce(int id);

    Annonce findAnnonceById(int id);

    Annonce findAnnonceByType(String type);

    List<Annonce> DisplayAllAnnonces();
    
    
    
}

    
