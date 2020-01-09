<?php
/**
 * file name: texts.php;
 * autor: anna.karutina;
 * date: 09.01.2020;
 */
require_once 'Text.php';
require_once 'Colortext.php';
$text1 = new Text('Tere hommikust!');
echo '<pre>';
print_r($text1);
echo '</pre>';
//$text1->setStr('Tere päevast!');
$text1->show();
echo '<hr>';
$text2 = new Colortext('Rõõmsat päeva!', '#FF0000');
echo '<pre>';
print_r($text2);
echo '</pre>';
$text2->show();
$text3 = new Colortext('Head ööd!', '#ddd');
$text3->show();