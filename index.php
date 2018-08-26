<?php

namespace App;

use App\Classes\SwordUnit;
use App\Classes\ArcherUnit;

require "vendor/autoload.php";	

$soldiers = [];

$soldiers[0] = new SwordUnit('Jack');
$soldiers[1] = new ArcherUnit('Jim');
$soldiers[2] = new SwordUnit('Jason');
$soldiers[3] = new ArcherUnit('Johnny');
$soldiers[4] = new SwordUnit('Jane');
$soldiers[5] = new ArcherUnit('Jessy');

foreach($soldiers as $soldier){
	echo $soldier->takeAction('Attack');
	echo "<br>";
	echo $soldier->takeAction('Defend');
	echo "<br>";
	echo $soldier->takeAction('Barrel roll');
	echo "<br>";
}
