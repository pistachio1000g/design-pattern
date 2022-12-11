<?php

namespace Tests\StateAndStrategy;

use App\StateAndStrategy\StateContext;
use PHPUnit\Framework\TestCase;

class StateContextTest extends TestCase
{
    public function test_子供らしく振る舞う()
    {
        $this->expectOutputString("子供らしく振る舞う\n");
        (new StateContext(100))->behavel();
    }

    public function test_本当の親のように甘える()
    {
        $this->expectOutputString("本当の親のように甘える\n");
        (new StateContext(20))->behavel();
    }

    public function test_持っている物を褒める()
    {
        $this->expectOutputString("持っている物を褒める\n");
        (new StateContext(41))->behavel();
    }

    public function test_そんな人よくわからないよ()
    {
        $this->expectException('InvalidArgumentException');
        (new StateContext(1))->behavel();
    }
}
