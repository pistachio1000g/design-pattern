<?php

namespace App\StateAndStrategy;

use App\StateAndStrategy\Strategy;

class AngryManStrategy implements Strategy
{
    /**
     * @inheritDoc
     */
    public function behaval()
    {
        print "子供らしく振る舞う\n";
    }
}
