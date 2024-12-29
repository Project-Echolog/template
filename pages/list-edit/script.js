document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('search-input');
  const dropdown = document.getElementById('dropdown');
  const dropdownItems = dropdown.getElementsByTagName('li');

  searchInput.addEventListener('focus', () => {
    dropdown.style.display = 'block';
  });

  searchInput.addEventListener('input', () => {
    const filter = searchInput.value.toLowerCase().trim();

    Array.from(dropdownItems).forEach((item) => {
      if (item.textContent.toLowerCase().includes(filter)) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  });

  searchInput.addEventListener('blur', () => {
    setTimeout(() => {
      dropdown.style.display = 'none';
    }, 200);
  });

  Array.from(dropdownItems).forEach((item) => {
    item.addEventListener('click', () => {
      searchInput.value = item.textContent;
      dropdown.style.display = 'none';
    });
  });
});
