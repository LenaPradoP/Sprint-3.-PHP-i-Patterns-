<?php
declare(strict_types = 1);
require_once "Tigger.php";

$tigger1 = Tigger::getInstance();
$tigger1->roar();
$tigger1->roar();
$tigger1->roar();
echo "Tigger ha rugido " . $tigger1->getCounter() . " veces." . PHP_EOL;

$tigger2 = Tigger::getInstance();
$tigger2->roar();
echo "Tigger ha rugido " . $tigger2->getCounter() . " veces." . PHP_EOL;
echo "Tigger ha rugido " . $tigger1->getCounter() . " veces." . PHP_EOL;

?>
