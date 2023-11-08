<?php
    
    include "connexion.php";

    $id = $_POST['id_annuaire'];
    $nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $vile = $_POST['ville'];
    $code = $_POST['codepostal'];
    $adresse = $_POST['adresse'];
    $date = $_POST['date_de_naissance'];
    $sexe = $_POST['sexe'];
    $description = $_POST['description'];

    $requete  = "select * from annuaire";
    $result = $bdd->query($requete);
    $tab = $result -> fetchAll();
    foreach ($tab as $ligne) {
        echo $ligne $id ; echo "<br>";
        echo $ligne $nom; echo "<br>";
        echo $ligne $prenom; echo "<br>";
        echo $ligne $telephone; echo "<br>";
        echo $ligne $profession; echo "<br>";
        echo $ligne $ville; echo "<br>";
        echo $ligne $codepostal; echo "<br>";
        echo $ligne $adresse; echo "<br>";
        echo $ligne $date_de_naissance; echo "<br>";
        echo $ligne $sexe; echo "<br>";
        echo $ligne $description; echo "<br>";
    }

    
?>