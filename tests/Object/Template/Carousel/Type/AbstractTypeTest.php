<?php

namespace Test\Object\Template\Carousel\Type;

use Sally\VkKeyboard\Object\Template\Carousel\Type\AbstractType;
use Test\Object\AbstractJsonConvertibleTest;

abstract class AbstractTypeTest extends AbstractJsonConvertibleTest
{
    public function testConvert(): void
    {
        $type = $this->getTypeWithNullableFields();
        $convertedToJsonTypeFileName = $this->getConvertedToJsonTypeFileName();
        $this->assertSame(
            json_decode($this->getExpectedJsonByFileName($convertedToJsonTypeFileName), true),
            json_decode($type->convert(), true)
        );
    }

    protected function getJsonFolderPath(): string
    {
        return __DIR__.'/converted_to_json_types';
    }

    abstract protected function getTypeWithNullableFields(): AbstractType;
    abstract protected function getConvertedToJsonTypeFileName(): string;
}