<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=bd_app2;charset=utf8;', 'root','');
  if(isset($_POST['pseudo'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST(['mdp']))){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO inscrire(nom, prenom, email, mdp) VALUES (?, ?, ?, ?)');
        $insertUser->execute(array($nom, $prenom, $email, $mdp));

        $recupUser =  $bdd->prepare('SELECT *FROM inscrire WHERE nom = ? AND prenom = ? AND email = ? AND mdp = ?');
        $recupUser->execute(array($nom, $prenom, $email, $mdp));
        if($recupUser->rowcount() > 0){
          $_SESSION['nom'] = $nom;        
          $_SESSION['prenom'] = $prenom;
          $_SESSION['email'] = $email;
          $_SESSION['mdp']  = $mdp;
          $_SESSION['id'] = $recupUser->fetch()['id'];
        }
    }else{
      
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" href="images/WhatsApp Image 2023-03-24 at 04.20.39.jpeg">
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <form class="login-form" action="" method="post">
        <h2>inscription</h2>
        <div class="form-group">
          <label for="username">Nom</label>
          <input type="text" id="username" name="nom" >
        </div>
        <div class="form-group">
          <label for="name">Prenom</label>
          <input type="text" id="Prenom" name="Prenom" >
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" >
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="mdp" >
        </div>
        
        <button type="submit" name="pseudo">enregister</button>

      </form>  
</body>
</html>