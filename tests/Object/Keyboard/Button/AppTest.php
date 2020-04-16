<?php

namespace Test\Object\Keyboard\Button;

use Sally\VkKeyboard\Object\Keyboard\Button\AbstractButton;
use Sally\VkKeyboard\Object\Keyboard\Button\App;

class AppTest extends AbstractButtonTest
{
    protected function getButtonWithNullableFields(): AbstractButton
    {
        return new App('', 0, '', '');
    }

    protected function getConvertedToJsonButtonFileName(): string
    {
        return 'app.json';
    }
}
