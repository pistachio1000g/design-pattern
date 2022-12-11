<?php

namespace App\StateAndStrategy;

use App\StateAndStrategy\State;

class AngryMan implements State
{
    /**
     * @inheritDoc
     */
    public function behaval()
    {
        print "子供らしく振る舞う\n";
    }
}
