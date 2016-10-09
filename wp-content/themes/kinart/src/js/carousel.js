import on from 'event-listener';

const carouselSel = '.carousel';
const containerSel = `${carouselSel}__container`;
const slideSel = `${carouselSel}__slide`;
const prevSel = `${carouselSel}__prev`;
const nextSel = `${carouselSel}__next`;
const currentSel = `${carouselSel}__current`;

on(document, 'DOMContentLoaded', _ => {
  const slides = document.querySelectorAll(slideSel);
  if (slides.length) {
    const currentLabel = document.querySelector(currentSel);
    const container = document.querySelector(containerSel);
    const totalItems = slides.length;
    let currentItemIndex = 0;

    function updateCarousel(delta) {
      const slideWidth = slides[0].offsetWidth;
      currentItemIndex = (totalItems + currentItemIndex + delta) % totalItems;
      currentLabel.innerHTML = currentItemIndex + 1;
      container.style.left = `${currentItemIndex * -slideWidth}px`;
    }

    on(document.querySelector(prevSel), 'click', _ => updateCarousel(-1));
    on(document.querySelector(nextSel), 'click', _ => updateCarousel(1));
  }
});
