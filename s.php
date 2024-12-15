<?php

include"db_connecte.php";
  // Vérification que les champs ne sont pas vides
    if(empty($nom) || empty($prenom) || empty($telephone)) {
        echo "Tous les champs doivent être remplis!";
    } else {
        // Insérer les données dans la base de données
        $sql = "INSERT INTO `personne`(`nom`, `prenom`, `telephone`) VALUES ('$nom', '$prenom', '$telephone')";
        $result = mysqli_query($con, $sql);
        
        if($result){
            // Redirection propre
            header("Location: index.php?msg=La personne a été ajoutée avec succès");
            exit; // Arrête l'exécution du script
        } else {
            echo "Une erreur est survenue : " . mysqli_error($con);
        }
    }


?>