

<?php

class Pays {
    private string $nom;
    private array $joueurs;
    private array $equipes;


    public function __construct (string $nom) {
        $this->nom = $nom;
    }

  
    
    public function addEquipe(Equipe $equipe) {
        $this->equipes[] = $equipe; 
    }
    

     public function addJoueur(Joueur $joueur) {
         $this->joueurs[] = $joueur;
     }



    // fonction qui va afficher les equipe grace à un foreach 
    
    
    public function afficherEquipes() //afichage d'equipes
    {
        $resultat = "";
        foreach ($this->equipes as $equipe) {
            $resultat .= $equipe."<br>";
        }

        return $resultat;
    }


    public function afficherJoueurs() //affichage des joueurs
    {
        $resultat = "Le ".$this->nom." à pour joueur : <br>";
        foreach ($this->joueurs as $joueur) {
            $resultat .=$joueur. "<br>";
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
    
    
    public function getJoueurs()
    {
        return $this->joueurs;
    }
    
    
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;
        
        return $this;
    }
    
    
    public function getEquipes()
    {
        return $this->equipes;
    }
    
    
    public function setEquipes($equipes)
    {
        $this->equipes = $equipes;
        
        return $this;
    }


    public function __toString()
    {
        return $this->nom;
    }













}