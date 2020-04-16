<?php

namespace Sally\VkKeyboard\Contracts\Template\Carousel\Type;

use Sally\VkKeyboard\Object\Template\Carousel\Type\Basic;

interface FactoryInterface
{
    public function basic(callable $callback): Basic;
}