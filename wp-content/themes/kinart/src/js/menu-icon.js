import on from 'event-listener';
import once from 'once-event-listener';

function getCurtains () {
  return document.querySelectorAll('.curtain');
}

function show (element, display = 'block') {
  element.style.display = display;
}

function hide (element) {
  show(element, 'none');
}

on(document, 'DOMContentLoaded', _ => {
  const menuIcon = document.querySelector('.menu-icon');
  const openCurtain = event => {
    const curtains = getCurtains();
    if (event) {
      event.preventDefault();
    }
    menuIcon.classList.toggle('menu-icon--open');
    curtains.forEach(curtain => {
      show(curtain);
      let curtainClasses = curtain.classList;
      if (curtainClasses.contains('curtain--open')) {
        curtainClasses.remove('curtain--behind');
      } else {
        once(curtain, 'animationend', _ => curtainClasses.add('curtain--behind'));
      }
      curtainClasses.toggle('curtain--open');
    });
  };

  if (getCurtains().length) {
    on(menuIcon, 'click', openCurtain);
  }
  if (window.location.hash.toLowerCase() === '#shownav') {
    openCurtain();
    getCurtains().forEach(hide);
  }
});
