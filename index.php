<h1>Football</h1>


<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$pays1 = new Pays ("France");
$pays2 = new Pays ("Espagne");
$pays3 = new Pays ("Angleterre");
$pays4 = new Pays ("Italie");
$pays5 = new Pays ("Argentine");
$pays6 = new Pays ("Brazil");

$equipe1 = new Equipe ("PSG", $pays1);
$equipe2 = new Equipe ("Strasbourg", $pays1);
$equipe3 = new Equipe ("Real Madrid", $pays2);
$equipe4 = new Equipe ("FC Barcelone", $pays2);
$equipe5 = new Equipe ("Manchester United", $pays3);
$equipe6 = new Equipe ("Juventus", $pays4);

$joueur1 = new Joueur ("Kilian", "Mbappe", "20-12-1998", $pays1);
$joueur2 = new Joueur ("Fermin", "Lopez", "11-05-2003", $pays2);
$joueur3 = new Joueur ("Jude", "Bellingham", "29-06-2003", $pays3);
$joueur4 = new Joueur ("Donnaruma", "Gianluigi", "25-02-1999", $pays4);
$joueur5 = new Joueur ("Lionel", "Messi", "24-06-1987", $pays5);
$joueur6 = new Joueur ("Neymar", "Junior", "05-02-1992", $pays6);

// var_dump($pays1);
$carriere1 = new Carriere ($joueur1, $equipe1, 2017, 2024);
$carriere2 = new Carriere ($joueur2, $equipe4, 2020, 2024);
$carriere4 = new Carriere ($joueur3, $equipe3, 2018, 2023);
$carriere5 = new Carriere ($joueur4, $equipe6, 2015, 2017);
$carriere6 = new Carriere ($joueur5, $equipe1, 2021, 2023);
$carriere7 = new Carriere ($joueur6, $equipe1, 2017, 2023);
$carriere8 = new Carriere ($joueur5, $equipe4, 2000, 2020);

//var_dump($pays1);
// echo $pays1;
// echo $equipe1;
//  echo $carriere5;

// echo $joueur5->afficherCarrieres();

// echo $pays2->afficherEquipes();
// echo $equipe1;
// echo $equipe1->afficherJoueurs();
// echo $equipe3->afficherJoueurs();
// echo $equipe1->getPays()->getNom();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football</title>
</head>
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.wrapper 
{
    display: flex;
    flex-direction: row;
    grid-gap: 10px;     
}

.pays {
    background-color: brown;
    color: white;
    border-radius: 10px;
    width: 200px;
    height: 200px;
    border: none;
    padding-left: 20px;
    box-shadow:  5px 5px 5px grey;}
    
h3 {
    margin-top: 20px;
    text-align: justify;
}

p {
        margin-top: 50%; 
        text-align: justify;
        font-size: 13px;
}
    

.carriere 
{
    display: flex;
    flex-direction: row;
    grid-gap: 10px;  
}      

.joueur {
    background-color: #8BC34A;
    color: white;
    margin-top: 50px;
    border-radius: 10px;
    width: 200px;
    height: 200px;
    border: none;
    padding-left: 20px;
    box-shadow:  5px 5px 5px grey;
}
        


aside{
    color: #f5fffa;
    font-size: 0.7em;
}



.equipes 
{
    display: flex;
    flex-direction: row;
    grid-gap: 10px;        
}

.equipe {
    background-color: #6495ED;
    color: white;
    margin-top: 50px;
    border-radius: 10px;
    width: 200px;
    height: 200px;
    border: none;
    padding-left: 20px;
    box-shadow:  5px 5px 5px grey;
}
   
</style>

<body>

    <div class="wrapper">
        <div class ="pays">
        <h3><?php
        echo $pays1->getNom();
        ?>
        </h3>
        
        <p>
        <?php
        echo $pays1->afficherEquipes();
        ?>
        </p>
        </div>
        
        <div class="pays">
        <h3>
        <?php
        echo $pays2->getNom();
        ?>
        </h3>
        <p>
        <?php
        echo $pays2->afficherEquipes();
        ?>
        </div>

        <div class="pays">
        <h3>
        <?php
        echo $pays3->getNom();
        ?>
        </h3>
        <p>
        <?php
        echo $pays3->afficherEquipes();
        ?>
        </div>

        <div class="pays">
        <h3>
        <?php
        echo $pays4->getNom();
        ?>
        </h3>
        <p>
        <?php
        echo $pays4->afficherEquipes();
        ?>
        </div>
    </div>

    

    <div class="carriere">
        <div class ="joueur">
        <h3><?php
        echo $joueur1->getNom();
        echo $joueur1->getPrenom();
        ?>
        </h3>
        <aside>
            <?php
            echo $joueur1->getNationalite();
            echo $joueur1->afficherAge();
            ?>
        </aside>        
        <p>
        <?php
        echo $joueur1->afficherCarrieres();
        ?>
        </p>
        </div>

        <div class ="joueur">
        <h3><?php
        echo $joueur2->getNom();
        echo $joueur2->getPrenom();
        ?>
        </h3>
        <aside>
            <?php
            echo $joueur2->getNationalite();
            echo $joueur2->afficherAge();
            ?>
        </aside>        
        <p>
        <?php
        echo $joueur2->afficherCarrieres();
        ?>
        </p>
        </div>

        
        <div class ="joueur">
        <h3><?php
        echo $joueur3->getNom();
        echo $joueur3->getPrenom();
        ?>
        </h3>
        <aside>
            <?php
            echo $joueur3->getNationalite();
            echo $joueur3->afficherAge();
            ?>
        </aside>        
        <p>
        <?php
        echo $joueur3->afficherCarrieres();
        ?>
        </p>
        </div>

        
        <div class ="joueur">
        <h3><?php
        echo $joueur4->getNom();
        echo $joueur4->getPrenom();
        ?>
        </h3>
        <aside>
            <?php
            echo $joueur4->getNationalite();
            echo $joueur4->afficherAge();
            ?>
        </aside>        
        <p>
        <?php
        echo $joueur4->afficherCarrieres();
        ?>
        </p>
        </div>

        
        <div class ="joueur">
        <h3><?php
        echo $joueur5->getNom();
        echo $joueur5->getPrenom();
        ?>
        </h3>  
        <aside>
            <?php
            echo $joueur5->getNationalite();
            echo $joueur5->afficherAge();
            ?>
        </aside>      
        <p>
        <?php
        echo $joueur5->afficherCarrieres();
        ?>
        </p>
        </div>

        
        <div class ="joueur">
        <h3><?php
        echo $joueur6->getNom();
        echo $joueur6->getPrenom();
        ?>
        </h3>  
        <aside>
            <?php
            echo $joueur6->getNationalite();
            echo $joueur6->afficherAge();
            ?>
        </aside>      
        <p>
        <?php
        echo $joueur6->afficherCarrieres();
        ?>
        </p>
        </div>
    </div>

    </div>
    <div class="equipes">
        <div class="equipe">
            <h3>
                <?php
                echo $equipe1;
                ?>
            </h3>
            <aside>
                <?php
                echo $equipe1->getPays()->getNom();
                ?>
            </aside>
            <p>
                <?php
                echo $equipe1->afficherJoueurs();
                ?>
            </p>
        </div>

        <div class="equipe">
            <h3>
                <?php
                echo $equipe2;
                ?>
            </h3>
            <aside>
                <?php
                echo $equipe2->getPays()->getNom();
                ?>
            </aside>
            <p>
                <?php
                echo $equipe2->afficherJoueurs();
                ?>
            </p>
        </div>

        <div class="equipe">
            <h3>
                <?php
                echo $equipe3;
                ?>
            </h3>
            <aside>
                <?php
                echo $equipe3->getPays()->getNom();
                ?>
            </aside>
            <p>
                <?php
                echo $equipe3->afficherJoueurs();
                ?>
            </p>
        </div>

        <div class="equipe">
            <h3>
                <?php
                echo $equipe4;
                ?>
            </h3>
            <aside>
                <?php
                echo $equipe4->getPays()->getNom();
                ?>
            </aside>
            <p>
                <?php
                echo $equipe4->afficherJoueurs();
                ?>
            </p>
        </div>

        <div class="equipe">
            <h3>
                <?php
                echo $equipe5;
                ?>
            </h3>
            <aside>
                <?php
                echo $equipe5->getPays()->getNom();
                ?>
            </aside>
            <p>
                <?php
                echo $equipe5->afficherJoueurs();
                ?>
            </p>
        </div>

        <div class="equipe">
            <h3>
                <?php
                echo $equipe6;
                ?>
            </h3>
            <aside>
                <?php
                echo $equipe6->getPays()->getNom();
                ?>
            </aside>
            <p>
                <?php
                echo $equipe6->afficherJoueurs();
                ?>
            </p>
        </div>

    </div>
</body>
</html>

<!-- 
<?php
echo $pays1->afficherEquipes();
echo $pays2->afficherEquipes();
echo $pays3->afficherEquipes();
echo $pays4->afficherEquipes();



?> -->
