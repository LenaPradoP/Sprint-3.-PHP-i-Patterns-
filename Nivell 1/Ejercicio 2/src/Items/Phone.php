<?php 
declare(strict_types =1);

namespace GettingOut\Items;

class Phone implements Item {
    public function getName(): string {
        return "Móvil";
    }
}

?>