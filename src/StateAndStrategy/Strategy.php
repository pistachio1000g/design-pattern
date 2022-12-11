<?php

namespace App\StateAndStrategy;

/**
 * Strategy - 抽象的な戦略を定義する
 * ConcreteStrategy - 具体的な戦略を定義する
 * Context - ConcreteStrategy を持ち Strategy を利用する
 */
interface Strategy
{
    /**
     * @return void
     */
    public function behaval();
}
