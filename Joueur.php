
<?php

class Joueur {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private Pays $nationalite;
    private array $carrieres;
 
    
    public function __construct (string $nom, string $prenom, string $dateNaissance, Pays $nationalite) { 
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new Datetime ($dateNaissance);
        $this->nationalite = $nationalite;
        $nationalite->addJoueur($this);
        $this->carrieres = [];
    }
    
   

    
    public function ajoutCarriere (Carriere $carriere )
    {
        $this->carrieres[]= $carriere;
    }
    
    public function afficherCarrieres()
    {
        $resultat = "";
        foreach ($this->carrieres as $carriere) {
            $resultat .=$carriere. "<br>";
        }
        return $resultat;
    }
    
    
    public function getNom()
    {
        return $this->nom." ";
    }

 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

   
    public function getNationalite()
    {
        return $this->nationalite;
    }

    
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

  
    public function getCarriere()
    {
        return $this->carrieres;
    }

 
    public function setCarriere($carriere)
    {
        $this->carriere = $carriere;

        return $this;
    }



    public function afficherAge()
    {        
        $now = new DateTime();
        $age = $now->diff($this->dateNaissance);        
        return " - ".$age->y. " ans";

    }


    public function __toString(): string {
        return $this->nom." ". $this->prenom." ";
    }
    
}