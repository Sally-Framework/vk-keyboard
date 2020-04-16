<?php

namespace Sally\VkKeyboard\Contracts\Factory;

use Sally\VkKeyboard\Contracts\Keyboard;

interface KeyboardInterface
{
    public function getTypeFactory(): Keyboard\Type\FactoryInterface;
    public function getButtonFactory(): Keyboard\Button\FactoryInterface;
}