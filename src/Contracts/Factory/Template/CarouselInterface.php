<?php

namespace Sally\VkKeyboard\Contracts\Factory\Template;

use Sally\VkKeyboard\Contracts\Template\Carousel;

interface CarouselInterface
{
    public function getTypeFactory(): Carousel\Type\FactoryInterface;
    public function getElementFactory(): Carousel\Element\FactoryInterface;
}