import on from 'event-listener';

const fgSelector = '.curtain__foreground';
const fgAttr = 'background-color';
const bgSelector = '.curtain__background polygon';
const bgAttr = 'fill';
const interval = 5000;

on(document, 'DOMContentLoaded', _ => {
	if (window.colourPairs) {
		const fg = document.querySelector(fgSelector);
		const bg = document.querySelector(bgSelector);
		const update = (colourPairIndex = 0) => {
			const colourPair = window.colourPairs[colourPairIndex];
			const nextIndex = (colourPairIndex + 1) % window.colourPairs.length;
			fg.style[fgAttr] = colourPair.fg;
			bg.style[bgAttr] = colourPair.bg;
			window.setTimeout(_ => { update(nextIndex); }, interval);
		}
		window.setTimeout(update, interval);
	}
});
