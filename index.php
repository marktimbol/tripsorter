<?php

use App\TripSorter;
require __DIR__ . "/vendor/autoload.php";

// $boardingCards = [
// 	[
// 		'from'	=> 'Union',
// 		'to'	=> 'Burjuman',
// 	],
// 	[
// 		'from'	=> 'ADCB',
// 		'to'	=> 'Al Jafiliya'
// 	],
// 	[
// 		'from'	=> 'Burjuman',
// 		'to'	=> 'ADCB',
// 	],
// 	[
// 		'from'	=> 'Financial Centre',
// 		'to'	=> 'Dubai Mall'
// 	],
// 	[
// 		'from'	=> 'Al Jafiliya',
// 		'to'	=> 'Emirates Tower'
// 	],
// 	[
// 		'from'	=> 'Emirates Tower',
// 		'to'	=> 'Financial Centre'
// 	],
// 	[
// 		'from'	=> 'Al Rigga',
// 		'to'	=> 'Union'
// 	],
// ];

$boardingCards = [
	[
		'from'	=> 'Madrid',
		'to'	=> 'Barcelona',
	],
	[
		'from'	=> 'Gerona Airport',
		'to'	=> 'Stockholm'
	],
	[
		'from'	=> 'Stockholm',
		'to'	=> 'New York'
	],
	[
		'from'	=> 'Barcelona',
		'to'	=> 'Gerona Airport',
	],
];

$trip = new TripSorter($boardingCards);
var_dump($trip->sort());
