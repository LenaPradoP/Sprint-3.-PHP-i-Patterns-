<?php

$wallet = new Wallet();
$keys = new Keys();
$phone = new Phone();
$metroCard = new MetroCard();

$person = new Person([$wallet, $houseKeys, $smartphone, $transportCard]);
$person->checkItems();

?>
