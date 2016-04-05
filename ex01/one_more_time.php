#!/usr/bin/php
<?php
$day = array (
	"Lundi",
	"Mardi",
	"Mercredi",
	"Jeudi",
	"Vendredi",
	"Samedi",
	"Dimanche"
);
$mounth = array (
	"Janvier" => 2592000,
	"Fevrier" => 5184000,
	"Mars" => 7776000,
	"Avril" => 10368000,
	"Mai" => 12960000,
	"Juin" => 15552000,
	"Juillet" => 18144000,
	"Aout" => 20736000,
	"Septembre" => 23328000,
	"Octobre" => 25920000,
	"Novembre" => 28512000,
	"Decembre" => 31104000
);
if ($argc == 2)
{
	$tab = explode(" ", $argv[1]);
	unset($tab[0]);
	$ytime = (intval($tab[3]) - 1970) * 31104000;
	$moutime = ($mounth[$tab[2]]);
	$timetab = explode(":", $tab[4], 2);
	$htime = $timetab[0] * 3600;
	$timetab = explode(":", $timetab[1]);
	$mintime = $timetab[0] * 60;
	$fulltime = $ytime + $moutime + $htime + $mintime + $tabtime[1];
	echo $fulltime."\n";
}
?>
