<?php 
declare(strict_types =1);

namespace GettingOut\People;

class Person {
    private array $items;

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function checkItems(): void {
        echo "Antes de salir, confirma que llevas:" . PHP_EOL;
        foreach ($this->items as $item) {
            echo "- " . $item->getName() . PHP_EOL;
        }
    }
}

?>