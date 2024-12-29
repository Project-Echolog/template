const collections = [
  {
    title: 'Action FPS Collection',
    author: 'Teodoro',
    items: '60 games',
    description: 'Best FPS games.',
    image:
      'https://img.redbull.com/images/c_fill,g_auto,w_450,h_600/q_auto:low,f_auto/redbullcom/2019/02/14/5455aa48-c5fb-48e5-9d54-3d848c7c32a2/rainbow-six-sieges-operators-add-complexity-to-the-strategising',
  },
  {
    title: 'Best MOBA',
    author: 'CAT_MORTY',
    items: '19 games',
    description: 'Top MOBA games.',
    image:
      'https://interfaceingame.com/wp-content/uploads/league-of-legends/league-of-legends-cover-375x500.jpg',
  },
  {
    title: 'Legendary',
    author: 'dbsam',
    items: '71 games',
    description: 'Legendary games.',
    image:
      'https://store-images.s-microsoft.com/image/apps.7859.14506879174941978.138d3eab-0b06-443b-a252-c99592521394.33a348aa-892d-49b8-9ef2-6ff06c22cf96?q=90&w=256&h=384&mode=crop&format=jpg&background=%23FFFFFF',
  },
  {
    title: 'Story Games',
    author: 'scott_loves98',
    items: '47 games',
    description: 'Popular story games.',
    image:
      'https://media.rockstargames.com/rockstargames/img/global/news/upload/actual_1364906194.jpg',
  },
  {
    title: '500 Days of Summer',
    author: 'Valerie',
    items: '15 games',
    description: 'Summer vibe games.',
    image:
      'https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg',
  },
  {
    title: 'Retro Classics',
    author: 'OldGamer',
    items: '30 items',
    description: 'Relive the golden age of gaming with these retro classics.',
    image:
      'https://www.codesproduit.fr/wp-content/uploads/2024/03/TEKKEN-7-PC-COVER.jpg',
  },
  {
    title: 'Indie Gems',
    author: 'IndieFan',
    items: '25 items',
    description:
      'Discover hidden indie game treasures loved by fans worldwide.',
    image: 'https://m.media-amazon.com/images/I/613Py5NEsSL.jpg',
  },
];

const itemsPerPage = 5;
let currentPage = 0;

function loadCollections() {
  const container = document.getElementById('collections-container');
  container.innerHTML = '';
  const start = currentPage * itemsPerPage;
  const end = start + itemsPerPage;
  const pageCollections = collections.slice(start, end);

  pageCollections.forEach((collection) => {
    const collectionHTML = `
          <div class="collection-item">
              <img src="${collection.image}" alt="Collection">
              <div class="collection-info">
                  <h3 class="collection-title">${collection.title}</h3>
                  <p class="collection-meta">${collection.author} · ${collection.items}</p>
                  <p class="collection-description">${collection.description}</p>
              </div>
          </div>`;
    container.innerHTML += collectionHTML;
  });
}

document.getElementById('next-button').addEventListener('click', () => {
  currentPage =
    (currentPage + 1) % Math.ceil(collections.length / itemsPerPage);
  loadCollections();
});
loadCollections();
