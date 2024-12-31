const closeButton = document.querySelector('.close-btn');
const addGameButton = document.querySelector('.add-btn');
// const gameForm = document.querySelector('.game-form');
var overlay = document.querySelector('.overlay');

closeButton.addEventListener('click', () => {
  overlay.style.display = 'none';
});

addGameButton.addEventListener('click', () => {
  overlay.style.display = 'none';
});
