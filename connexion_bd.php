<?php

function verif_connexion_bd ($email, $motdepasse, &$resultat=array()) {
    require ('connect.php');
    $sql="SELECT * FROM `client`  where email=:email and $motdepasse=:motdepasse";

    try {
        $commande = $pdo->prepare($sql);
        $commande->bindParam(':email', $email);
        $commande->bindParam(':motdepasse', $motdepasse);
        $bool = $commande->execute();

        if ($bool)
            $resultat = $commande->fetchAll(PDO::FETCH_ASSOC); //tableau d'enregistrements

        if (count($resultat)== 0) return false;
        else return true;
    }

    catch (PDOException $e) {
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
        die(); // On arrête tout.
    }

    if (count($resultat)== 0) return false;
    else return true;
}

?>
