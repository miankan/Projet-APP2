<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="acceuil.css">
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
    <header>
        <h1>deals <span>house</span></h1>
        <form action="#">
            <input type="text" name="rechercher" placeholder="rechercger des produits" id="searchBox">
        </form>
        <div class="recherche">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="chart">
            <i class="fa-solid fa-cart-shopping" style="color: #fff;"></i>
            <p><a href="#">chart</a></p>
        </div>
        <div class="user">
            <a href="pop.php"><i class="fa-solid fa-user" style="color: white;"></i></a>
            <p><a href="pop.php">user</a></p>
            
        </div>
    </header>

    <!-----
    <div class="images">
        <img src="images/enchere.jpg" alt="">
    </div>
    <i class="fa-solid fa-user" style="color: white;"></i>
    <p><a href="#">user</a></p>
    --->

    <div class="carousel">
        <ul class="carousel-list">
          <li class="carousel-item">
            <img src="images/enchere.jpg" alt="Image 1">
          </li>
          <li class="carousel-item">
            <img src="images/canape-rouge-antique.jpg" alt="Image 2">
          </li>
          <li class="carousel-item">
            <img src="images/elctromenagères.jpg" alt="Image 3">
          </li>
          <li class="carousel-item">
            <img src="images/iphone.png" alt="Image 3">
          </li>
          
        </ul>
    </div>
      
    <section>
        <h1>nouvel arrivages</h1>
        <a href="#">voir plus</a>
        <div class="container">
            <div class="image1">
                <img src="images/afficher-appareil-table.jpg" alt="">
                <img src="images/configuration-jeu-manette-casque.jpg" alt="">
                <img src="images/petite-chaise-moderne-coussin-bleu-dessus-dans-piece.jpg" alt="">
            </div>

            <div class="image2">
                <img src="images/pexels-philip-boakye-3428498.jpg" alt="">
                <img src="images/1068.jpg" alt="">
                <img src="images/2114.jpg" alt="">
            </div>

            <div class="image3">
                <img src="images/maillot_messi.jpg" alt="">
                <img src="images/OLVD9J0.jpg" alt="" id="ol">
                <img src="images/P2PDHN0.jpg" alt="" id="p2">
            </div>
        </div>
    </section>

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

    <script src="connexion.js"></script>
</body>
</html>