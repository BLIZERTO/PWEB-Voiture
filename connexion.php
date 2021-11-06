<?php
session_start();

$email=  isset($_POST['email'])?($_POST['email']):'';
$motdepasse=  isset($_POST['motdepasse'])?($_POST['motdepasse']):'';
$msg='';

if  (count($_POST)==0)
    require ("seConnecter.html") ;
else {
    require('connexion_bd.php');
    if  (! verif_connexion($email,$motdepasse) ||  !verif_connexion_bd() ($email, $motdepasse, $resultat)) {
        $_SESSION['profil']= array();

        $msg ="erreur de saisie";
        require ('seConnecter.html') ;
    }
    else {
        $_SESSION['profil']= $resultat[0];

        $url = "accueil.php";
        header ("Location:" .$url) ;

    }
}

function verif_connexion($email, $motdepasse) {
    return true; // TODO
}

?>
