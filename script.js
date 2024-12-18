const carousel = document.querySelector('.carousel');
const carouselItems = document.querySelectorAll('.carousel__item');

let carouselItemIndex = 0;

setInterval(() => {
  carouselItems[carouselItemIndex].classList.remove('active');
  carouselItemIndex = (carouselItemIndex + 1) % carouselItems.length;
  carouselItems[carouselItemIndex].classList.add('active');
}, 5000);
