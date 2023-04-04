const openPopupButton = document.getElementById('open-popup');
const popup = document.getElementById('popup');

openPopupButton.addEventListener('click', () => {
  popup.style.display = 'block';
});

popup.addEventListener('click', (event) => {
  if (event.target === popup) {
    popup.style.display = 'none';
  }
});