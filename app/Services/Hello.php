<?php

namespace App\Services;

class Hello
{
    public string $a;
    public string $b;

    public function __construct(string $b)
    {
        $this->a = 'Vsem hello';
        $this->b = $b;
    }

    public function foo() {
        return $this;
    }
}
