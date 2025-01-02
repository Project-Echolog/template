document.addEventListener('DOMContentLoaded', () => {
  const stars = document.querySelectorAll('.rating .star');
  stars.forEach((star, index) => {
    star.addEventListener('click', () => {
      stars.forEach((s, i) => {
        if (i <= index) {
          s.classList.add('selected');
        } else {
          s.classList.remove('selected');
        }
      });
      console.log(`You selected ${index + 1} star(s)`);
    });
  });

  const closeButton = document.querySelector('.close-button');
  const saveButton = document.querySelector('.save-button');
  // const gameForm = document.querySelector('.game-form');
  var overlay = document.querySelector('.overlay-review');

  closeButton.addEventListener('click', () => {
    overlay.style.display = 'none';
  });

  saveButton.addEventListener('click', () => {
    overlay.style.display = 'none';
  });
});
