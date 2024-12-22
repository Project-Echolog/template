const buttonCollectionLike = document.getElementById('collection-like');
const collectionSearch = document.getElementById('collection-search');

buttonCollectionLike.addEventListener('click', (event) => {
  event.preventDefault();
  console.log('Game added to wishlist');
  const icon = buttonCollectionLike.children[0];
  const text = buttonCollectionLike.children[1];
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

function filterCollection() {
  const imageCards = document.querySelectorAll('.image-card');
  const searchValue = collectionSearch.value.toLowerCase();
  imageCards.forEach((card) => {
    const title = card.title.toLowerCase();
    if (title.includes(searchValue)) {
      card.classList.remove('image-card--hidden');
      return;
    }
    card.classList.add('image-card--hidden');
  });
}

collectionSearch.addEventListener('input', (event) => {
  filterCollection();
});
