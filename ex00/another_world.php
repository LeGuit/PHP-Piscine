#!/usr/bin/php
<?php
$tab = preg_split("/[ \t]/", trim($argv[1]));
$str = implode(" ", $tab);
echo $str."\n";
?>
