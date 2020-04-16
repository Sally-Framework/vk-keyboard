<?php

namespace Sally\VkKeyboard\Object\Template;

use Sally\VkKeyboard\Contracts\Template\Carousel\Type\FactoryInterface;

class Converter
{
    public function carousel(FactoryInterface $factory): Carousel\Converter
    {
        return new Carousel\Converter($factory);
    }
}