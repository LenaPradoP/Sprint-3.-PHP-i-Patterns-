<?php

use GettingOut\Container\Container;
use GettingOut\Items\Wallet;
use GettingOut\Items\Keys;
use GettingOut\Items\Phone;
use GettingOut\Items\MetroCard;
use GettingOut\People\Person;


require_once __DIR__ . '/src/Container.php';
require_once __DIR__ . '/src/Item.php';
require_once __DIR__ . '/src/Wallet.php';
require_once __DIR__ . '/src/Keys.php';
require_once __DIR__ . '/src/MetroCard.php';
require_once __DIR__ . '/src/Phone.php';
require_once __DIR__ . '/src/Person.php';

$container = new Container();

$container->set('wallet', fn() => new Wallet());
$container->set('keys', fn() => new Keys());
$container->set('phone', fn() => new Phone());
$container->set('metroCard', fn() => new MetroCard());

$person = new Person([
    $container->get('wallet'),
    $container->get('keys'),
    $container->get('phone'),
    $container->get('metroCard')
]);

$person->checkItems();

?>
