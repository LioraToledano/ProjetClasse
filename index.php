<?php
include 'ITerrain';
include 'ISportCollectif';
include 'Isport.inc';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Comparable.php';
include 'Club.php';

// Initialisation de club avec leurs ville
$club= array();
$club[1]=new club(001,"Dijon",18);
$club[2]=new club(002,"PSG",32);
$club[3]=new club(003,"Nantes",2);


// Les sports de Dijon
$SF= new SportBallon("FootBall", 11, 60, 100);
$club[1]->AjouterSport($SF);


// Les sports de PSG
$Sport1=New Sport("Natation", 50);
$Sport2=New Sport("Tennis",2);
$SportBallon1=New SportBallon("VTT",5,40, 200);
$SportBallon2=New SportBallon("Paddle", 1,100,1200);
$SportRelais1=New SportRelais("Roller", 1, 100);

$club[2]->AjouterSport($Sport1);
$club[2]->AjouterSport($Sport2);
$club[2]->AjouterSport($SportBallon1);
$club[2]->AjouterSport($SportBallon2);
$club[2]->AjouterSport($SportRelais1);


// Les sports de Nantes
$Sport3= New Sport("Boxe",2);
$SportBallon3= New SportBallon("Danse",1,100,1200);
$SportBallon4= New SportBallon("Marche", 3,1000, 1200);
$SportRelais2= New SportRelais("Ski", 6,50);

$club[3]->AjouterSport($Sport3);
$club[3]->AjouterSport($SportBallon3);
$club[3]->AjouterSport($SportBallon4);
$club[3]->AjouterSport($SportRelais2);


echo'<h3>Liste des clubs: </h3> <a href="localhost:8000"></a><br>';
echo'<a href="localhost:8000?id=1" >1-Dijon 18 </a><br>';
echo'<a href="localhost:8000id=2"> 2-PSG 32</a><br>';
echo'<a href="localhost:8000?id=3"> 3-Nantes 2</a><br>';


Foreach ($SF as $KeySF => $SF);
{
    echo'<h3> Liste des sports du club de Dijon: </h3>';
    echo  " DESCRIPTION Nom du sport: " . $SF->getnomSport() . ", Nombre de Joueurs:" . $SF->getnbJoueurs() . ", Longueur" . $SF->getlongueur() . ", Largeur" . $SF->getlargeur() . "<br>";

}

Foreach ($Sport1 as $keySport1 =>$Sport1);
{
    echo'<h3> Liste des sports du club du PSG: </h3>';
    echo "DESCRIPTION Nom du sport:" .$Sport1->getNomSport(). ", Nombre de Joueurs:" .$Sport1->getnbJoueurs(). "<br>";
}

Foreach ($Sport2 as $keySport2 =>$Sport2);
{
    echo "DESCRIPTION Nom du sport:" .$Sport2->getNomSport(). ", Nombre de Joueurs:" .$Sport2->getnbJoueurs(). "<br>";
}

Foreach ($SportBallon1 as $keySportBallon1 =>$SportBallon1);
{
    echo "DESCRIPTION Nom du sport:" .$SportBallon1->getNomSport(). ", Nombre de Joueurs:" .$SportBallon2->getnbJoueurs(). ", Longueur" .$SportBallon1->getlongueur(). ", Largeur" .$SportBallon1->getlargeur(). "<br>";
}


Foreach ($SportBallon2 as $keySportBallon2 =>$SportBallon2);
{
    echo "DESCRIPTION Nom du sport:" .$SportBallon2->getNomSport(). ", Nombre de Joueurs:" .$SportBallon2->getnbJoueurs(). ", Longueur" .$SportBallon2->getlongueur(). ", Largeur" .$SportBallon2->getlargeur(). "<br>";
}


Foreach ($SportRelais1 as $keySportRelais1 =>$SportRelais1);
{
    echo "DESCRIPTION Nom du sport:" .$SportRelais1->getNomSport(). ", Nombre de Joueurs:" .$SportRelais1->getnbJoueurs(). ",Distance:" .$SportRelais1->getDistance(). "<br>";
}

Foreach ($Sport3 as $keySport3 =>$Sport3);
{
    echo '<h3> Liste des sports du club de Nantes: </h3>';
    echo "DESCRIPTION Nom du sport:" .$Sport3->getNomSport(). ", Nombre de Joueurs:" .$Sport3->getnbJoueurs(). "<br>";
}

Foreach ($SportBallon3 as $keySportBallon3 =>$SportBallon3);
{

    echo "DESCRIPTION Nom du sport:" .$SportBallon3->getNomSport(). ", Nombre de Joueurs:" .$SportBallon3->getnbJoueurs(). ", Longueur:" .$SportBallon3->getlongueur(). ", Largeur:" .$SportBallon3->getlargeur(). "<br>";
}

Foreach ($SportBallon4 as $keySportBallon4 =>$SportBallon4);
{

    echo "DESCRIPTION Nom du sport:" .$SportBallon4->getNomSport(). ", Nombre de Joueurs:" .$SportBallon4->getnbJoueurs(). ", Longueur:" .$SportBallon4->getlongueur(). ", Largeur:" .$SportBallon4->getlargeur(). "<br>";
}


Foreach ($SportRelais2 as $keySportRelais2 =>$SportRelais2);
{
    echo "DESCRIPTION Nom du sport:" .$SportRelais2->getNomSport(). ", Nombre de Joueurs:" .$SportRelais2->getnbJoueurs(). ", Distance:" .$SportRelais2->getDistance(). "<br>";
}



