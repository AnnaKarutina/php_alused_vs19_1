<?php
/**
 * file name: Burgerid.php;
 * autor: anna.karutina;
 * date: 07.01.2020;
 */
require_once 'Burger.php';
require_once 'TervislikBurger.php';
require_once 'LuxBurger.php';

$argipaevaBurger = new Burger('Argipäevane', 'looma', 'valge sai', 3.65);
$argipaevaBurger->valiLisand1('tomat', 0.25);
$argipaevaBurger->valiLisand2('salat', 0.75);
$argipaevaBurger->valiLisand3('juust', 1.5);
echo '<pre>';
print_r($argipaevaBurger);
echo '</pre>';
$loppHind = $argipaevaBurger->koostaBurger();
echo 'Lõplik hind on '.$loppHind.'&euro;<br>';
echo '<hr>';

$tervislikBurger = new TervislikBurger('noorlooma', 5.65);
$tervislikBurger->valiTervislikLisand1('muna', 2.75);
$tervislikBurger->valiTervislikLisand2('rukkola', 1.45);
$loppHind = $tervislikBurger->koostaBurger();
echo 'Lõplik hind on '.$loppHind.'&euro;<br>';
echo '<hr>';

$luxBurger = new LuxBurger();
$luxBurger->valiLisand1('Soovin lisada salat', 1.75);
$loppHind = $luxBurger->koostaBurger();
echo 'Lõplik hind on '.$loppHind.'&euro;<br>';