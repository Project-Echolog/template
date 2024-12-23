const collectionSearch = document.getElementById('collection-search');
const noResultsMessage = document.getElementById('no-results');

const popularCollections = document.getElementById('popular-collections');
const newCollections = document.getElementById('new-collections');
const searchedCollections = document.getElementById('searched-collections');

function filterCollection() {
  const collectionCards = document.querySelectorAll('.collection-card');
  const searchValue = collectionSearch.value.toLowerCase();

  noResultsMessage.style.display = 'block';

  if (!searchValue) {
    popularCollections.classList.remove('hidden');
    newCollections.classList.remove('hidden');
    searchedCollections.classList.add('hidden');
    collectionCards.forEach((card) => {
      card.classList.remove('collection-card--hidden');
    });
    return;
  }

  popularCollections.classList.add('hidden');
  newCollections.classList.add('hidden');
  searchedCollections.classList.remove('hidden');

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
