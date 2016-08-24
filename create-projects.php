<?php

$categories = [
	'digital' => [
		'Artillery Interior Architecture',
		'Coy Yiontis Architects',
	],
	'environmental' => [
		'City of Greater Dandenong',
		'DFO Spencer',
		'Headspace',
		"St Kevin's College Toorak",
		'YPRL Outreach Truck',
	],
	'identity' => [
		'Backbone Consulting',
		'Bradley Walburgh Interior Design',
		'Dearne Herrenberg Interiors',
		'DoseSecure',
		'ECA',
		'MediSecure',
		'Ogroup Property',
		'Soulshine',
	],
	'print' => [
		'ACCA Invitation',
		'Café Amalia',
		'ANZSOG Brochure',
		'Castlerock Information Memorandum',
		'Giro d’Italia Booklet',
		'City of Greater Dandenong',
		'Cotton On Body',
		'Cotton On Kids',
		'Futurum Australia',
		'MAV Invitation',
		'MIAF Arts Catalogue',
		'PLVN Annual Report',
		"Queen Victoria Women's Centre",
	],
	'publishing' => [
		'Hachette Australia',
		'Hardie Grant Books',
	],
];

foreach ($categories as $category => $projects) {
	foreach ($projects as $project_title) {
		$post_id = trim(`wp post create --post_type=project --post_title="${project_title}" --porcelain`);
		`wp post term set ${post_id} category ${category}`;
		`wp post update ${post_id} --post_status=publish`;
	}
}
