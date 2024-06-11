<?php

namespace App\Service;

class Greetings
{
    public function greet(string $name): string
    {
        return "Helllo, $name!";
    }
}
