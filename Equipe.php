
<?php

class Equipe {
    private string $nom;
    private Pays $pays;
    private array $joueurs;
    
    
    
    public function __construct (string $nom, Pays $pays) 
    {
        $this->nom = $nom;
        $this->pays = $pays;
        $pays->addEquipe($this);
        $this->joueurs = [];
        
        
    }
    
    public function addJoueur(Joueur $joueur) {
            $this->joueurs[] = $joueur; 
        }
        
        
    public function afficherJoueurs()
        {
            $resultat = "";
            foreach ($this->joueurs as $joueur) {
                $carriereList = $joueur->getCarriere();
                foreach ($carriereList as $carriere) {
                    if ($carriere->getEquipe() == $this) {
                        $resultat .= $joueur->getNom();
                        $resultat .= $joueur->getPrenom()." (".$carriere->getDateDebut().")<br>";
                        
                    }                    
                }
                // else > compare a l'équipe actuel > si c'est la bonne equipe tu affiche 
            }
            return $resultat;
        }
    
        
        
    public function getNom()
    {
        return $this->nom;
    }
    
    
    public function setNom($nom)
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    
    public function getPays()
    {
        return $this->pays;
    }
    
    
    public function setPays($pays)
    {
        $this->pays = $pays;
        
        return $this;
    }
    
    public function getJoueurs()
    {
        return $this->joueurs;
    }
    
    
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;
        
        return $this;
    }
    


    public function __toString()
    {
    return $this->nom;
    }



    //     $this->pays as $pays
    //     $this-

    // // afficher $this pays et $this annee;


    // foreach de $this->joueurs as $joueur {
    //         echo $joueur 
    // }


    // public function afficherCarrieres()
    // {
    //     $resultat = "";
    //     foreach ($this->carrieres as $carriere) {
    //         $resultat .=$carriere. "<br>";
    //     }

    //     return $resultat;
    // }
    

    

    
}
