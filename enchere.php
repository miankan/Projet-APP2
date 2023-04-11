<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="enchere.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-qwFs8JvMDVf3PcnnbJTbhNkz8xFvAvXpslxJjnBZSZ15RvbW/C0Q+Inx6mCkj6SskUd+b+/Tz1kTsjl4ud4A4w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Enchères en ligne</title>
</head>
<body>
    <!---
        <a href="#">enchères en ligne</a>
    -->
    <header>
        <div class="retour">
            <a href="acceuil.php"><img src="images/fleche.png" alt="" ></a>
        </div>
        <h1>deals <span>house</span></h1>
        <div class="recherche">
            <form action="#">
                <input type="search" placeholder="rechercher des produits pour enchères" name="search">
            </form>
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <button type="submit">rechercher</button>
        <div class="dex">
        </div>
    </header>
    <div id="rectangle"></div>

    <div class="container">
        <div class="cont1">
            <div class="image1">
                <img src="images/elctromenagères.jpg" alt="" >
                <a href="electro.php">elctromenagères</a>
            </div>
            <div class="image2">
                <img src="images/ballon d'or.jpg" alt="" >
                <a href="#">ballon d'or</a>
            </div>
        </div>

        <div class="cont2">
            <div class="image3">
                <img src="images/paire_cr7.jpg" alt=""  width="100px">
                <a href="#">paire cr7</a>
            </div>

            <div class="image4">
                <img src="images/rolex.jpg" alt=""  width="100px">
                <a href="#">rolex</a>
            </div>
        </div>
    </div>


    <footer>
        <div class="logo_sociaux">
            <img src="images/WhatsApp Image 2023-03-24 at 04.20.39.jpeg" alt="" >
            <a href="#"> <i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
           
        </div>

        <div class="lien1">
            <h1>main pages</h1>
            <ul>
                <li><a href="#">vendre avec nous</a></li><br>
                <li><a href="#">a propos de nous</a></li><br>
                <li><a href="#">contact</a></li><br>
                <li><a href="#">promo</a></li><br>
            </ul>
        </div>

        <div class="lien2">
            <h1>politique</h1>
            <ul>
                <li><a href="#">condition de l'utilisation</a></li><br>
                <li><a href="#">politique de confidentialité</a></li><br>
                <li><a href="#">politique de retour</a></li>
            </ul>
        </div>

        <div class="lien3">
            <h1>s'abonner</h1>
            <p>Abonnez-vous a notre newsletter, afin d'êtres le premier<br> informer des nouvelles offres et promotion</p>
            <form action="#">
                <input type="search" name="recherche" placeholder="Entrez votre email">
                <button type="submit">s'abonner</button>
            </form>
        </div>

    </footer>

    <script src="enchere.js"></script>
</body>
</html>