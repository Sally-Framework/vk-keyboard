<?php

namespace Test\Object\Template\Carousel\Element;

use Sally\VkKeyboard\Object\Template\Carousel\Element;

class OpenLinkTest extends AbstractElementTest
{
    protected function getElementWithNullableFields(): Element\AbstractElement
    {
        return new Element\OpenLink('', [], '', '', '');
    }

    protected function getConvertedToJsonElementFileName(): string
    {
        return 'open_link.json';
    }
}
