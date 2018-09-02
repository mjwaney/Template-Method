<?php

namespace App;

use App\Classes\SwordUnit;
use App\Classes\ArcherUnit;
use App\Classes\RocketAttack;

require "vendor/autoload.php";	

$soldiers = [];

$soldiers[0] = new SwordUnit();
$soldiers[1] = new ArcherUnit();
$soldiers[2] = new SwordUnit();
$soldiers[3] = new ArcherUnit();
$soldiers[4] = new SwordUnit();
$soldiers[5] = new ArcherUnit();

$names = ['Jack', 'Jim', 'Jason', 'Johnny', 'Jane', 'Jessy'];

foreach($soldiers as $key => $soldier){
	$soldier->setName($names[$key]);
	echo $soldier->takeAction('Attack');
	echo "<br>";
	echo $soldier->takeAction('Defend');
	echo "<br>";
	echo $soldier->takeAction('Barrel roll');
	echo "<br>";
	$soldier->setAttackMethod(new RocketAttack);
	echo $soldier->takeAction('Attack');
	echo "<br>";
}
