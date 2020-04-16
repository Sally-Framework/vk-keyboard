<?php

namespace Test\Object\Keyboard\Type;

use PHPUnit\Framework\MockObject\MockObject;
use Sally\VkKeyboard\Contracts\Keyboard\Button;
use Sally\VkKeyboard\Object\Keyboard\Type;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    /**
     * @var Type\Factory
     */
    private $typeFactory;

    /**
     * @var Button\FactoryInterface
     */
    private $buttonFactory;

    public function setUp(): void
    {
        $this->buttonFactory = $this->createMock(Button\FactoryInterface::class);
        $this->typeFactory   = new Type\Factory($this->buttonFactory);
    }


    public function testInline()
    {
        $mockWithCallback = $this->getPreparedMockWithCallbackByCallbackName('testInlineCallback');
        $this->typeFactory->inline([$mockWithCallback, 'testInlineCallback']);
    }

    public function testBasic()
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
