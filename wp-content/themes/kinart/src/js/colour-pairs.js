import on from 'event-listener';

const curtainSelector = '.curtain';
const curtainOpenSelector = '.curtain--open';
const fgSelector = '.curtain__foreground';
const fgAttr = 'background-color';
const bgSelector = '.curtain__background polygon';
const bgAttr = 'fill';
const interval = 5000;

function insertAfter(newNode, referenceNode) {
	referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

on(document, 'DOMContentLoaded', _ => {
	if (window.colourPairs) {
		const update = (colourPairIndex = 0) => {
			const colourPair = window.colourPairs[colourPairIndex];
			const nextIndex = (colourPairIndex + 1) % window.colourPairs.length;
			const oldCurtain = document.querySelector(curtainSelector);
			if (oldCurtain && !document.querySelector(curtainOpenSelector)) {
				const newCurtain = oldCurtain.cloneNode(true);
				const fg = newCurtain.querySelector(fgSelector);
				const bg = newCurtain.querySelector(bgSelector);
				fg.style[fgAttr] = colourPair.fg;
				bg.style[bgAttr] = colourPair.bg;
				insertAfter(newCurtain, oldCurtain);
				on(fg, 'animationend', _ => {
					oldCurtain && oldCurtain.parentNode && oldCurtain.parentNode.removeChild(oldCurtain);
				});
			}
			window.setTimeout(_ => { update(nextIndex); }, interval);
		}
		window.setTimeout(update, interval);
	}
});
