// CAROUSEL
function carousel(container, time = 3000) {
  if (!container) return;
  // if (!container) console.warn('No se pudo encontrar el contenedor.'); return;
  // if (container.childElementCount <= 0) console.warn('No se encontraron items dentro del carousel.'); return;
  const carouselItems = container.children;
  let current = 0;

  setInterval(() => {
    carouselItems[current].classList.remove('carousel__item--show');
    current = (current + 1) % carouselItems.length;
    carouselItems[current].classList.add('carousel__item--show');
  }, time);
}

export default carousel;