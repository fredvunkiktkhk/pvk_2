<?php
require_once 'conf.php';
//echo '<pre>';
//print_r($sess);
//echo '</pre>';
//require_once 'lib/fnk.php';
//require_once 'menus/menu.php';
//// lehe sisu
//// päis - header ja muud vajalikud osad
//pais();
//// menüü elemendid - menu funktsioon kasutab menu_element funktsiooni sisu loomiseks
//menu(array(
//    'praed' => $praed,
//    'supid' => $supid,
//    'magus' => $magusad,
//    'joogid' => $joogid
//));
//// jalus - kõik JS asjad
//jalus();


$mainTmpl = new Template('main');

$mainTmpl->set('title', 'Menu Application');
$mainTmpl->set('page title', 'tartu KHK menu');
$mainTmplContent = $mainTmpl->parse();

echo $mainTmplContent;

//echo '<pre>';
//print_r($mainTmpl);
//echo '</pre>';
?>