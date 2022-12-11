<?php

namespace App\StateAndStrategy;

use App\StateAndStrategy\Strategy;

class ConcreteStrategy
{
    public function __construct(private Strategy $strategy)
    {
    }

    /**
     * @return void
     */
    public function behavel()
    {
        $this->strategy->behaval();
    }
}
