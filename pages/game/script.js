const buttonGameWishlist = document.getElementById('game-wishlist');
const buttonGameLike = document.getElementById('game-like');
const buttonGameAdd = document.getElementById('game-add');
const reviewButton = document.getElementById('review-button');
var overlay = document.querySelector('.overlay');

buttonGameWishlist.addEventListener('click', (event) => {
  event.preventDefault();
  console.log('Game added to wishlist');
  const icon = buttonGameWishlist.children[0];
  const text = buttonGameWishlist.children[1];
  if (icon.classList.contains('liked')) {
    icon.classList.remove('liked');
    icon.src = '/echolog-template/assets/svgs/bookmark-outline.svg';
    text.textContent = parseInt(text.textContent) - 1;
    return;
  }
  icon.classList.add('liked');
  icon.src = '/echolog-template/assets/svgs/bookmark-solid.svg';
  text.textContent = parseInt(text.textContent) + 1;
});

buttonGameLike.addEventListener('click', (event) => {
  event.preventDefault();
  console.log('Game liked');
  const icon = buttonGameLike.children[0];
  const text = buttonGameLike.children[1];
  if (icon.classList.contains('liked')) {
    icon.classList.remove('liked');
    icon.src = '/echolog-template/assets/svgs/heart-outline.svg';
    text.textContent = parseInt(text.textContent) - 1;
    return;
  }
  icon.classList.add('liked');
  icon.src = '/echolog-template/assets/svgs/heart-solid.svg';
  text.textContent = parseInt(text.textContent) + 1;
});

buttonGameAdd.addEventListener('click', (event) => {
  event.preventDefault();
  console.log('Game added to cart');
  const icon = buttonGameAdd.children[0];
  if (icon.classList.contains('liked')) {
    icon.classList.remove('liked');
    icon.src = '/echolog-template/assets/svgs/plus-circle-outline.svg';
    return;
  }
  icon.classList.add('liked');
  icon.src = '/echolog-template/assets/svgs/check-circle-solid.svg';
});

reviewButton.addEventListener('click', (event) => {
  console.log('Review button clicked');
  event.preventDefault();
  overlay.style.display = 'block';
});
