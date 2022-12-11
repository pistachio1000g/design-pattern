<?php

namespace App\StateAndStrategy;

/**
 * State - 状態ごとの振る舞いを定義するメソッドの集まり
 * ConcreteState - State で定義されたメソッドを具体的に実装する
 * Context - ConcreteState を持ち State を使用するための API を持つ
 */
interface State
{
    /**
     * @return void
     */
    public function behaval();
}
