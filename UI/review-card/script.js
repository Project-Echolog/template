document
  .querySelectorAll('.review-card__like-button')
  .forEach((likeButton, index) => {
    likeButton.addEventListener('click', (event) => {
      event.preventDefault();
      const likeCounts = document.querySelectorAll('.review-card__like-count');
      const likeIcon = likeButton.children[0];
      const likeCount = parseInt(likeCounts[index].textContent);
      if (likeIcon.classList.contains('liked')) {
        likeIcon.classList.remove('liked');
        likeIcon.src = '/echolog-template/assets/svgs/heart-outline.svg';
        likeCounts[index].textContent = likeCount - 1;
        return;
      }
      likeIcon.classList.add('liked');
      likeIcon.src = '/echolog-template/assets/svgs/heart-solid.svg';
      likeCounts[index].textContent = likeCount + 1;
    });
  });
