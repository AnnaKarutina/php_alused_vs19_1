<?php
/**
 * file name: h01.php;
 * autor: anna.karutina;
 * date: 10.12.2019;
 */
require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud fun-onid

// teeme katsed
$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);
// katsetame sql
//$slq = 'RENAME TABLE `anna_db`.`koolid2015` TO `anna_db`.`koolid`';
//$result = query($slq, $ikt);
$sql = 'SELECT * FROM koolid';
$result = getData($sql, $ikt);
echo '<pre>';
print_r($result);