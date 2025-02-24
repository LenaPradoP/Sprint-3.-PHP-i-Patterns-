<?php

namespace GettingOut\Container;

use Exception;

class Container {

    private array $services = [];

    public function set(string $name, callable $service): void
    {
        $this->services[$name] = $service;
    }

    public function get(string $name)
    {
        if (!isset($this->services[$name])) {
            throw new Exception("No service registered with name: {$name}");
        }

        return $this->services[$name]();
    }
}
