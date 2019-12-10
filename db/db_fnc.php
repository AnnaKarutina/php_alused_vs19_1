<?php
/**
 * file name: db_fnc.php;
 * autor: anna.karutina;
 * date: 10.12.2019;
 */

// loome ühendus andmebaasiga
function connection($host, $user, $pass, $dbname){
  $link = mysqli_connect($host, $user, $pass, $dbname);
  if($link === false) {
    // veateade probleemi korral
    echo 'Probleem andmebaasi ühendamisega!<br>';
    exit;
  }
  // määrame utf-8
  mysqli_set_charset($link, 'utf8');
  return $link; // tagastame edaspidiseks kasutamiseks
}

// suvalise päringu saatmine andmebaasi
function query($sql, $link){
  $result = mysqli_query($link, $sql);
  if($result === false){
    echo 'Probleem päringuga <b>'.$sql.'</b><br>';
  }
  // kui $result === true
  return $result;
}