import on from 'event-listener';
import once from 'once-event-listener';

on(document, 'DOMContentLoaded', _ => {
  const categoryTitle = document.querySelector('.category-title');
  if (categoryTitle) {
    const contentArea = document.querySelector('.content-area');
    const widgetArea = document.querySelector('.widget-area');

    on(categoryTitle, 'click', _ => {
      contentArea.classList.add('is-out');
      widgetArea.classList.add('is-in');
      once(widgetArea.querySelector('.current-menu-item'), 'click', e => {
        e.preventDefault();
        contentArea.classList.remove('is-out');
        widgetArea.classList.remove('is-in');
      });
    });
  }
});
