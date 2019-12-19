<?php
/**
 * file name: logout.php;
 * autor: anna.karutina;
 * date: 19.12.2019;
 */
session_start();
session_unset();
session_destroy();
header('Location: index.php');