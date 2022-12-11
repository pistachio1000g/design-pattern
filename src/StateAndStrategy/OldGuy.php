<?php

namespace App\StateAndStrategy;

use App\StateAndStrategy\State;

class OldGuy implements State
{
    /**
     * @inheritDoc
     */
    public function behaval()
    {
        print "持っている物を褒める\n";
    }
}
