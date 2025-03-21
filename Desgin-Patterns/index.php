<?php

require_once __DIR__ . '/vendor/autoload.php';

//
//use patterns\Creational\Factory\WebDialog;
//
//
//
////function that used to create dialog
//function createDialog(\patterns\Creational\Factory\Dialog $dialog)
//{
//   $dialog->createButton();
//    return$dialog->render();
//
//}
//
////create web dialog
//
//var_dump(createDialog(new WebDialog()));




use patterns\Creational\Builder\Computer\Director;


$director = new Director(new \patterns\Creational\Builder\Computer\Builders\ComputerCSBuilder());

var_dump($director->makeComputer());

$director->changeBuilder(new \patterns\Creational\Builder\Computer\Builders\ComputerLXBuilder());

var_dump($director->makeComputer());

