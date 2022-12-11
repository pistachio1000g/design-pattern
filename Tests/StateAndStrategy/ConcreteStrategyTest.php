<?php

namespace Tests\StateAndStrategy;

use App\StateAndStrategy\AngryManStrategy;
use App\StateAndStrategy\ConcreteStrategy;
use App\StateAndStrategy\LadyStrategy;
use App\StateAndStrategy\OldGuyStrategy;
use PHPUnit\Framework\TestCase;

class ConcreteStrategyTest extends TestCase
{
    public function test_子供らしく振る舞う()
    {
        $this->expectOutputString("子供らしく振る舞う\n");
        (new ConcreteStrategy(new AngryManStrategy()))->behavel();
    }

    public function test_本当の親のように甘える()
    {
        $this->expectOutputString("本当の親のように甘える\n");
        (new ConcreteStrategy(new LadyStrategy()))->behavel();
    }

    public function test_持っている物を褒める()
    {
        $this->expectOutputString("持っている物を褒める\n");
        (new ConcreteStrategy(new OldGuyStrategy()))->behavel();
    }
}
