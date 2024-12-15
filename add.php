

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>ajouter une personne</title>
</head>
<body>

<h1 style="margin: 30px;">Ajouter une personne</h1>

    <br>
    <br>
    <a href="index.php"><button class="btn btn-light" >Annuler</button></a>
<form action="s.php" method="POST">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom </label>
    <input type="text" class="form-control"  name="nom" id="nom" aria-describedby="nom">
    <div id="nom" class="form-text">veuillez saisir votre nom</div>
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prénom </label>
    <input type="text" class="form-control" id="prenom"  name="prenom" aria-describedby="prenom">
    <div id="prenom" class="form-text">veuillez saisir votre Prénom</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telephone</label>
    <input type="text" class="form-control" name="telephone" id="exampleInputPassword1">
  </div>
 <br>
 <br>
 <button type="submit" class="btn btn-primary" name="ajoute" >Ajouter</button>
  
</form>
</body>
</html>