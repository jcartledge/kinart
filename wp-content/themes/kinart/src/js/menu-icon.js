import once from 'once-event-listener';

const domReady = document.addEventListener.bind(document, 'DOMContentLoaded');

domReady((e) => {
  const $ = document.querySelector.bind(document);
  const menu_icon = $('.menu-icon');
  const menu = $('.menu');
  const front_page_colours = $('.front-page-colours');
  if (menu_icon) {
    menu_icon.addEventListener('click', e => {
      menu_icon.classList.toggle('menu-icon--open');

      if (front_page_colours.classList.contains('front-page-colours--open')) {
        front_page_colours.classList.remove('front-page-colours--back');
      } else {
        once(front_page_colours, 'animationend', e => {
          front_page_colours.classList.add('front-page-colours--back');
        });
      }
      front_page_colours.classList.toggle('front-page-colours--open');
    });
  }
});
