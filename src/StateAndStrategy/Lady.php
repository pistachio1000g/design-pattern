<?php

namespace App\StateAndStrategy;

use App\StateAndStrategy\State;

class Lady implements State
{
    /**
     * @inheritDoc
     */
    public function behaval()
    {
        print "本当の親のように甘える\n";
    }
}
