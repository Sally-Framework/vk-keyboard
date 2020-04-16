<?php

namespace Test\Factory\Template;

use PHPUnit\Framework\MockObject\MockObject;
use Sally\VkKeyboard\Contracts\Keyboard\Button\FactoryInterface;
use Sally\VkKeyboard\Factory\Template\Carousel;
use Sally\VkKeyboard\Object as VkObject;
use PHPUnit\Framework\TestCase;

class CarouselTest extends TestCase
{
    /**
     * @var FactoryInterface
     */
    private $buttonFactory;

    public function setUp(): void
    {
        $this->buttonFactory = $this->createMock(FactoryInterface::class);
    }

    public function testGetTypeFactory(): void
    {
        /** @var Carousel|MockObject $carousel */
        $carousel = $this->getMockBuilder(Carousel::class)
            ->setConstructorArgs([$this->buttonFactory])
            ->setMethodsExcept(['getTypeFactory'])
            ->getMock();
        $carousel
            ->expects($this->once())
            ->method('getElementFactory');

        $typeFactory = $carousel->getTypeFactory();
        $this->assertSame($typeFactory, $carousel->getTypeFactory());
        $this->assertInstanceOf(VkObject\Template\Carousel\Type\Factory::class, $typeFactory);
    }

    public function testGetElementFactory(): void
    {
        $carousel = new Carousel($this->buttonFactory);
        $elementFactory = $carousel->getElementFactory();
        $this->assertInstanceOf(VkObject\Template\Carousel\Element\Factory::class, $elementFactory);
        $this->assertSame($elementFactory, $carousel->getElementFactory());
    }
}
