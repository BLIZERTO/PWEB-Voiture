<?php

function inserer_inscription_bd($nom, $prenom, $pseudo,$motdepasse, $email) {
    require('connect.php');

    $sql = 'INSERT INTO `client` (nom, prenom, pseudo, motdepasse, email) VALUES (:nom, :prenom, :pseudo, :motdepasse, :email)';

    try {
        $commande = $pdo->prepare($sql);
        $commande->bindParam(":nom", $nom);
        $commande->bindParam(":prenom", $prenom);
        $commande->bindParam(":num", $pseudo);
        $commande->bindParam(":email", $motdepasse);
        $commande->bindParam(":email", $email);


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
