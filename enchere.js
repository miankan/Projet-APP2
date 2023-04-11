const images = [
    "publique.jpg",
    "6212114.jpg",
    "enchere.jpg"
  ];
  
  let currentImageIndex = 0;
  
  function changeImage() {
    const rectangle = document.getElementById("rectangle");
    rectangle.style.backgroundImage = `url(${images[currentImageIndex]})`;
  
    currentImageIndex++;
    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }
  }
  
  setInterval(changeImage, 900); // changer l'image toutes les 2 secondes
  