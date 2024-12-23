const collectionSearch = document.getElementById('collection-search');
const noResultsMessage = document.getElementById('no-results');

function filterCollection() {
  const collectionCards = document.querySelectorAll('.collection-card');
  const searchValue = collectionSearch.value.toLowerCase();

  noResultsMessage.style.display = 'block';

  collectionCards.forEach((card) => {
    const title = card.title.toLowerCase();
    if (title.includes(searchValue)) {
      noResultsMessage.style.display = 'none';
      card.classList.remove('collection-card--hidden');
      return;
    }
    card.classList.add('collection-card--hidden');
  });
}

collectionSearch.addEventListener('input', filterCollection);
