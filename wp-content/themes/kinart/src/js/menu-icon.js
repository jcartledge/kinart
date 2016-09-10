import on from 'event-listener';
import once from 'once-event-listener';

on(document, 'DOMContentLoaded', _ => {
  const menuIcon = document.querySelector('.menu-icon');
  const curtain = document.querySelector('.curtain');
  on(menuIcon, 'click', _ => {
    menuIcon.classList.toggle('menu-icon--open');
    if (curtain) {
      let curtainClasses = curtain.classList;
      if (curtainClasses.contains('curtain--open')) {
        curtainClasses.remove('curtain--behind');
      } else {
        once(curtain, 'animationend', _ => curtainClasses.add('curtain--behind'));
      }
      curtainClasses.toggle('curtain--open');
    }
  });
});
