<?php
/**
 * Created by PhpStorm.
 * User: n0tm
 * Date: 15.12.19
 * Time: 0:25
 */

namespace Sally\VkKeyboard\Object\Keyboard\Type;

use Sally\VkKeyboard\Contracts\Keyboard;

class Factory implements Keyboard\Type\FactoryInterface {

    /**
     * @var Keyboard\Button\FactoryInterface
     */
    private $buttonFactory;

    public function __construct(Keyboard\Button\FactoryInterface $buttonFactory)
    {
        $this->buttonFactory = $buttonFactory;
    }

    public function basic(callable $callback, bool $oneTime = true): Basic
    {
        return new Basic($this->callUserFunctionWithButtonsFactory($callback), $oneTime);
    }

    public function inline(callable $callback): Inline
    {
        return new Inline($this->callUserFunctionWithButtonsFactory($callback));
    }

    private function callUserFunctionWithButtonsFactory(callable $function): array
    {
        return call_user_func($function, $this->buttonFactory);
    }
}