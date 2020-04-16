<?php

namespace Test\Object\Template\Carousel\Type;

use Sally\VkKeyboard\Object\Template\Carousel\Type\AbstractType;
use Sally\VkKeyboard\Object\Template\Carousel\Type\Basic;

class BasicTest extends AbstractTypeTest
{
    protected function getTypeWithNullableFields(): AbstractType
    {
        return new Basic([]);
    }

    protected function getConvertedToJsonTypeFileName(): string
    {
        return 'basic.json';
    }

}
