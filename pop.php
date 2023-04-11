<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="icon" href="images/WhatsApp Image 2023-03-24 at 04.20.39.jpeg">
    <link rel="stylesheet" href="pop.css">
</head>
<body>
    <form class="login-form" action="" method="post">
        <h2>connexion</h2>
        <div class="form-group">
          <label for="username">Nom d'utilisateur</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <a href="#" class="forgot-password">Mot de passe oublié?</a>
        </div>
        <button type="submit">Se connecter</button>

        <div class="images">
            <div class="image1">
                <img src="images/facebook.png" alt="" width="60px">
                <a href="#">Se connecter avec facebook </a>
            </div>
            <div class="image2">
                <img src="images/google+.png" alt="" width="70px">
                <a href="">Se connecter avec google+</a>
            </div>
            <p>Nouveau membre?<a href="inscription.php">S'inscrire maintenant</a></p>
        </div>
      </form>
      
</body>
</html>