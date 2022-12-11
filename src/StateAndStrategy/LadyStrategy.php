<?php

namespace App\StateAndStrategy;

use App\StateAndStrategy\Strategy;

class LadyStrategy implements Strategy
{
    /**
     * @inheritDoc
     */
    public function behaval()
    {
        print "本当の親のように甘える\n";
    }
}
