import on from 'event-listener';

on(document, 'DOMContentLoaded', _ => {
	const projectOverlaySel = '.project-overlay';
  const projectOverlay = document.querySelector(projectOverlaySel);
  if (projectOverlay) {
    const show = projectOverlay.querySelector(`${projectOverlaySel}__show`);
    const hide = projectOverlay.querySelector(`${projectOverlaySel}__hide`);

    on(show, 'click', _ => {
      projectOverlay.classList.remove('is-out');
      show.style.display = 'none';
      hide.style.display = 'block';
    });

    on(hide, 'click', _ => {
      projectOverlay.classList.add('is-out');
      hide.style.display = 'none';
      show.style.display = 'block';
    });
  }
});
