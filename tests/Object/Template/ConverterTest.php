<?php

namespace Test\Object\Template;

use Sally\VkKeyboard\Object\Template\Converter;
use PHPUnit\Framework\TestCase;
use Sally\VkKeyboard\Object\Template\Carousel;
use Sally\VkKeyboard\Object\Keyboard;

class ConverterTest extends TestCase
{
    /**
     * @var Converter
     */
    private $converter;

    public function setUp(): void
    {
        $this->converter = new Converter();
    }

    public function testCarousel()
    {
        $elementFactory = new Carousel\Element\Factory();
        $buttonFactory  = new Keyboard\Button\Factory();
        $typeFactory = new Carousel\Type\Factory($elementFactory, $buttonFactory);
        $this->assertEquals(new Carousel\Converter($typeFactory), $this->converter->carousel($typeFactory));
    }
}
