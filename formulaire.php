<?php
    include "connexion.php";
    $requete  = "select * from annuaire";
    $result = $bdd->query($requete);
    
    while ($ligne = $result -> fetch()) {
        echo $ligne ['id_annuaire']; echo "<br>";
        echo $ligne ['nom']; echo "<br>";
        echo $ligne ['prenom']; echo "<br>";
        echo $ligne ['telephone']; echo "<br>";
        echo $ligne ['profession']; echo "<br>";
        echo $ligne ['ville']; echo "<br>";
        echo $ligne ['codepostal']; echo "<br>";
        echo $ligne ['adresse']; echo "<br>";
        echo $ligne ['date_de_naissance']; echo "<br>";
        echo $ligne ['sexe']; echo "<br>";
        echo $ligne ['description']; echo "<br>";
    }

?>