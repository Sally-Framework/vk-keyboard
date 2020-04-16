<?php

namespace Test\Object\Keyboard\Button;

use Sally\VkKeyboard\Object\Keyboard\Button\AbstractButton;
use Sally\VkKeyboard\Object\Keyboard\Button\Link;

class LinkTest extends AbstractButtonTest
{
    protected function getButtonWithNullableFields(): AbstractButton
    {
        return new Link('', '');
    }

    protected function getConvertedToJsonButtonFileName(): string
    {
        return 'link.json';
    }

}
