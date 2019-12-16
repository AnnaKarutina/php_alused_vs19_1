<?php
/**
 * file name: h03.php;
 * autor: anna.karutina;
 * date: 16.12.2019;
 */
require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud fun-onid
require_once 'ui.php'; // loeme väljundfunktsioonid

$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);

otsing();

if(isset($_GET['otsi'])){
  $otsi = $_GET['otsi'];
  //lisame otsingusõna päringusse
  $sql = 'SELECT 2015,Kool FROM koolid2015 WHERE Kool LIKE "%'.$otsi.'%"';
  $result = getData($sql, $ikt);
  table01($result, array('Kool', '2015'));
}




