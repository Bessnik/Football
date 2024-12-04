<?php

class Carriere {    
    private Equipe $equipe;
    private Joueur $joueur;
    private int $dateDebut;
    private int $dateFin;

    public function __construct(Joueur $joueur, Equipe $equipe,  int $dateDebut, int $dateFin)
    {    
        $this->equipe = $equipe;
        $this->joueur = $joueur;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $joueur->ajoutCarriere($this);
        $equipe->addJoueur($joueur);
    }

    public function getEquipe()
    {
        return $this->equipe;
    }
        
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
        
        return $this;
    }
    
    
    public function getJoueur()
    {
        return $this->joueur;
    }
    
    
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;
        
        return $this;
    }
    
    
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    
    
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
        
        return $this;
    }
    
    public function getDateFin()
    {
        return $this->dateFin;
    }
    
    
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
        
        return $this;
    }


    public function __toString()
    {
        return $this->equipe.  "  " . $this->dateDebut . " à " . $this->dateFin."<br>";
    }



}


