<?php
    include "connexion.php";
    
    $id = $_POST['id'];
    $requete = "delete from annuaire where id_annuaire = '$id'";

    $result = $bdd->exec($requete);

    if($result) {
        echo "Suppression effectuee";
    }
    else{
        echo "Suppression non effectuee! tester une autre fois";
    }
?>