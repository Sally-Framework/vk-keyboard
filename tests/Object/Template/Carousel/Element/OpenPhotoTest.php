<?php

namespace Test\Object\Template\Carousel\Element;

use Sally\VkKeyboard\Object\Template\Carousel\Element;

class OpenPhotoTest extends AbstractElementTest
{
    protected function getElementWithNullableFields(): Element\AbstractElement
    {
        return new Element\OpenPhoto([], '', '', '');
    }

    protected function getConvertedToJsonElementFileName(): string
    {
        return 'open_photo.json';
    }

}