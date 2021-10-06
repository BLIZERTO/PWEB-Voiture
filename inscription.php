<?php
	session_start();

	$nom=  isset($_POST['nom'])?($_POST['nom']):'';
	$prenom=  isset($_POST['prenom'])?($_POST['prenom']):'';
  $pseudo=  isset($_POST['pseudo'])?($_POST['psuedo']):'';
  $email=  isset($_POST['email'])?($_POST['email']):'';
  $motdepasse=  isset($_POST['motdepasse'])?($_POST['motdepasse']):'';
	$msg='';

	if  (count($_POST)>5)
              require ("inscription.tpl") ;
    else {
	    if  (! verif_inscription($nom, $prenom, $pseudo, $email, $motdepasse) ||  !inserer_inscription_bd ($nom, $prenom, $pseudo, $email, $motdepasse, $resultat)) {
	        $_SESSION['profil']= array();

			$msg ="erreur de saisie";
	        require ("inscription.tpl") ;
		}
	    else {
			$_SESSION['profil']= $resultat[0];

			$url = "accueil.php";
			header ("Location:" .$url) ;

			//$url = "accueil.php?no=$nom";
			//header ("Location:" .$url) ;	//echo ("ok, bienvenue");
		}
    }

function verif_inscription($nom, $prenom, $psuedo, $email, $motdepasse) {
	return true; //ou false;
}

function inserer_inscription_bd($nom, $prenom, $pseudo, $email, $motdepasse) {
  require('connect.php');

  $sql = 'INSERT INTO `utilisateur` (nom, prenom, pseudo, email, motdepasse) VALUES (:nom, :prenom, :pseudo, :email, :motdepasse)';

  try {
    $commande = $pdo->prepare($sql);
    $commande->bindParam(":nom", $nom);
    $commande->bindParam(":prenom", $prenom);
    $commande->bindParam(":pseudo", $pseudo);
    $commande->bindParam(":email", $email);
		$commande->bindParam(":motdepasse", $motdepasse);


    if($commande->execute()){
      return true;
    }
    return false;

  }
  catch (PDOException $e){
    echo utf8_encode("Echec d'insertion : " . $e->getMessage() . "\n");
    die();
  }
}

?>
