<?php
include "db_connecte.php";

// Vérifiez si l'id est passé dans l'URL
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Récupérer les données de la personne en fonction de l'id
    $sql = "SELECT * FROM `personne` WHERE id = $id";
    $result = mysqli_query($con, $sql);

    // Si la personne existe, assigner les valeurs aux variables
    if($result && mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $nom = $row['nom'];
        $prenom = $row['prénom'];
        $telephone = $row['telephone'];
    } else {
        // Si la personne n'est pas trouvée, afficher un message d'erreur
        echo "Aucune personne trouvée avec cet ID.";
        exit;
    }

    // Vérifier si le formulaire a été soumis
    if(isset($_POST['ajoute'])){
        // Récupérer les valeurs du formulaire
        $nom = mysqli_real_escape_string($con, $_POST['nom']);
        $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
        $telephone = mysqli_real_escape_string($con, $_POST['telephone']);

        // Mettre à jour les informations de la personne dans la base de données
        $update_sql = "UPDATE `personne` SET `nom`='$nom', `prénom`='$prenom', `telephone`='$telephone' WHERE id = $id";
        $update_result = mysqli_query($con, $update_sql);

        if($update_result){
            // Si la mise à jour est réussie, rediriger vers la page d'index
            header("Location: index.php?msg=Personne modifiée avec succès");
            exit;
        } else {
            echo "Erreur de mise à jour : " . mysqli_error($con);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>modification de donnée</title>
</head>
<body>
<h1 style="margin: 30px;">Modifier les formations de la personne</h1>

<br>
<br>
<a href="index.php"><button class="btn btn-light" >accueil</button></a>

<form action="" method="POST">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom </label>
    <input type="text" class="form-control"  value="<?php echo $nom?>" name="nom" id="nom" aria-describedby="nom">
    <div id="nom" class="form-text">veuillez saisir votre nom</div>
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prénom </label>
    <input type="text" class="form-control" id="prenom"  value="<?php echo $prenom?>" name="prenom" aria-describedby="prenom">
    <div id="prenom" class="form-text">veuillez saisir votre Prénom</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telephone</label>
    <input type="text" class="form-control"  value="<?php echo $telephone?>" name="telephone" id="exampleInputPassword1">
  </div>
 <br>
 <br>
 <button type="submit" class="btn btn-primary" name="ajoute" >Modifier</button>
  
</form>
</body>
</html>