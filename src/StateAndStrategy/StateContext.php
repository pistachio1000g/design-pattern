<?php

namespace App\StateAndStrategy;

use InvalidArgumentException;
use App\StateAndStrategy\Lady;
use App\StateAndStrategy\State;
use App\StateAndStrategy\OldGuy;
use App\StateAndStrategy\AngryMan;

class StateContext
{
    /**
     * @var State
     */
    private State $state;

    public function __construct($age)
    {
        $this->setTargetAge($age);
    }

    protected function setTargetAge(int $age)
    {
        switch (true) {
            case ($age >= 20 && $age <= 40):
                $this->state = new Lady();
                break;
            case ($age > 40 && $age <= 60):
                $this->state = new OldGuy();
                break;
            case ($age > 60):
                $this->state = new AngryMan();
                break;
            default:
                throw new InvalidArgumentException('そんな人よくわからないよ');
        }
    }

    /**
     * @return void
     */
    public function behavel()
    {
        $this->state->behaval();
    }
}
