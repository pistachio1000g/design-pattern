<?php

namespace App\StateAndStrategy;

use App\StateAndStrategy\Strategy;

class OldGuyStrategy implements Strategy
{
    /**
     * @inheritDoc
     */
    public function behaval()
    {
        print "持っている物を褒める\n";
    }
}
