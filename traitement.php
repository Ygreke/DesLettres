<?php
include 'connexion.php';
if (!empty($_GET['lettre'])) {
    $lettre = $_GET['lettre'];
    $req = $conn->prepare('UPDATE lettre SET iteration=iteration+1 WHERE lettre= :lettre');
    try {
        $donnees = array(
            'lettre'=>$lettre
        );
        $success = $req->execute($donnees);
    }
    catch (Exception $e) {
        echo 'erreur requete : ' , $e->getMessage();
    }
}
?>
