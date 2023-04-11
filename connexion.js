let searchBox = document.getElementById("searchBox");
let articles = [
  { nom: "guitare", prix: 60 },
  { nom: "chemises", prix: 25 },
  { nom: "pantalons", prix: 40 },
  { nom: "vestes", prix: 80 }
];

searchBox.addEventListener("keyup", function() {
  let searchTerm = searchBox.value.toLowerCase();
  let filteredArticles = articles.filter(function(article) {
    return article.nom.toLowerCase().includes(searchTerm);
  });
  console.log(filteredArticles);
});