<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="electro.css">
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
        <div class="retour">
            <a href="enchere.php"><img src="images/fleche.png" alt="" ></a>
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

    <section>
        <div class="image">
            <img src="images/elctromenagères.jpg" alt="" width="120px">
        </div>
        <div class="droite">
            <h1>elctromenagères</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis dicta inventore consectetur, <br>cupiditate corrupti pariatur rem eum nesciunt, fugit dolore tempore<br> nam voluptate repellendus ratione? Rem qui quis explicabo neque!</p>
            <div class="savoir">
                <p>en savoir plus</p>
            </div>
            <div class="chiffre">
                <div class="chif1">
                    <p>400.000 fcfa</p>
                </div>
                <div class="chif2">
                    <p>400.000 fcfa</p>
                </div>
                <div class="chif3">
                    <p>30% de réduction</p>
                </div>
            </div>
            <p>vous pouvez suivre ou enchérir le prix de ce produit <a href="#">cliquez ici</a></p>

            <div class="boutton">
                <button type="submit">enchérir</button>
                <button type="submit">acheter maintenant</button>
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
</body>
</html>