<?php
require_once __DIR__ . "/src/Item.php";
require_once __DIR__ . "/src/Wallet.php";
require_once __DIR__ . "/src/Keys.php";
require_once __DIR__ . "/src/MetroCard.php";
require_once __DIR__ . "/src/Person.php";
require_once __DIR__ . "/src/Phone.php";

$wallet = new Wallet();
$keys = new Keys();
$phone = new Phone();
$metroCard = new MetroCard();

$person = new Person([$wallet, $keys, $phone, $metroCard]);
$person->checkItems();

?>
