<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>page d'accueil</title>
</head>
<body>
<h1 style="margin: 30px;">Crude en php</h1>
    <br>
    <br>
    <br>
<ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
  <li class="nav-item" role="presentation">
  <a href="index.php"> <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Accueil</button></a>
  </li>
  <li class="nav-item" role="presentation">
  <a href="add.php">    <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Ajouter</button>
  </a>
  </li>
 
</ul><br>
<br>
<br>
     <p class="fw-bold"style="margin: 20px;">tableau d'information.</p>
<table class="table" style="margin: 30px; padding:20px;">
  <thead>
    <tr>
      <th scope="col">indentifiant</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">telephone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include "db_connecte.php";
    $sql ="SELECT * FROM `personne`";
    $result = $con->query($sql);
    if(!$result){
        die("erreur d'affichage".mysqli_error());
    }
   while($row=$result->fetch_assoc()){
    echo 
    "<tr>
    <td>" . $row['id'] . "</td>
    <td>" . $row['nom'] . "</td>
    <td>" . $row['prénom'] . "</td>
    <td>" . $row['telephone'] . "</td>
    <td>
        <a href='modifier.php?id=" . $row['id'] . "' class='btn btn-secondary'>Modifier</a>
        <a href='supprimer.php?id=" . $row['id'] . "' class='btn btn-danger'>Supprimer</a>
    </td>
</tr>";
   }
   ?>
  </tbody>

</table>
</body>
</html>