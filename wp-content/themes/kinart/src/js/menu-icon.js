import on from 'event-listener';
import once from 'once-event-listener';

function getCurtains() {
  return document.querySelectorAll('.curtain');
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
  if (location.hash.toLowerCase() === '#shownav') {
    openCurtain();
  }
});
