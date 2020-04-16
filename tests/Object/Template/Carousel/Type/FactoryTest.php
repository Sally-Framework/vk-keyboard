<?php

namespace Test\Object\Template\Carousel\Type;

use PHPUnit\Framework\MockObject\MockObject;
use Sally\VkKeyboard\Object as VkObject;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    /**
     * @var VkObject\Template\Carousel\Type\Factory|MockObject
     */
    private $typeFactory;

    public function setUp(): void
    {
        $this->typeFactory = new VkObject\Template\Carousel\Type\Factory(
            new VkObject\Template\Carousel\Element\Factory(),
            new VkObject\Keyboard\Button\Factory()
        );
    }

    public function testBasic(): void
    {
        $mockWithCallback = $this->getPreparedMockWithCallbackByCallbackName('testBasicCallback');
        $this->typeFactory->basic([$mockWithCallback, 'testBasicCallback']);
    }

    private function getPreparedMockWithCallbackByCallbackName(string $name): MockObject
    {
        $mockWithCallback = $this->getMockBuilder(\stdClass::class)
            ->addMethods([$name])
            ->getMock();
        $mockWithCallback->expects($this->once())
            ->method($name)
            ->willReturn([]);

        return $mockWithCallback;
    }
}
