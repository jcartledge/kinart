document.addEventListener('DOMContentLoaded', (e) => {
  const menu_icon = document.querySelector('.menu-icon');
  const front_page_colours = document.querySelector('.front-page-colours');
  if (menu_icon) {
    menu_icon.addEventListener('click', e => {
      menu_icon.classList.toggle('menu-icon--open');
      front_page_colours.classList.toggle('front-page-colours--open');
    });
  }
});
