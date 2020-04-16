<?php

namespace Sally\VkKeyboard\Contracts\Factory;

interface TemplateInterface
{
    public function getCarouselFactory(): Template\CarouselInterface;
}