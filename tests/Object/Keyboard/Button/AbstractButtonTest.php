<?php

namespace Test\Object\Keyboard\Button;

use Sally\VkKeyboard\Object\Keyboard\Button\AbstractButton;
use Test\Object\AbstractJsonConvertibleTest;

abstract class AbstractButtonTest extends AbstractJsonConvertibleTest
{
    public function testConvert(): void
    {
        $button = $this->getButtonWithNullableFields();
        $convertedToJsonButtonFileName = $this->getConvertedToJsonButtonFileName();
        $this->assertSame(
            json_decode($this->getExpectedJsonByFileName($convertedToJsonButtonFileName), true),
            $button->convert()
        );
    }

    protected function getJsonFolderPath(): string
    {
        return __DIR__.'\\converted_to_json_buttons';
    }

    abstract protected function getButtonWithNullableFields(): AbstractButton;
    abstract protected function getConvertedToJsonButtonFileName(): string;
}