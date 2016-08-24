import $ from 'jquery';

$(_ => {
	const $menu_icon = $('.menu-icon');
	$menu_icon.on('click', e => {
		$menu_icon.toggleClass('menu-icon--open');
	});
});
