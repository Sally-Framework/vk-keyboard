<?php

namespace Test\Factory;

use PHPUnit\Framework\MockObject\MockObject;
use Sally\VkKeyboard\Contracts\Factory\TemplateInterface;
use PHPUnit\Framework\TestCase;
use Sally\VkKeyboard\Contracts\Keyboard\Button\FactoryInterface;
use Sally\VkKeyboard\Factory\Template;
use Sally\VkKeyboard\Factory\Template\Carousel;

class TemplateTest extends TestCase
{
    /**
     * @var TemplateInterface
     */
    private $template;

    /**
     * @var FactoryInterface|MockObject
     */
    private $buttonFactory;

    public function setUp(): void
    {
        $this->buttonFactory = $this->createMock(FactoryInterface::class);
        $this->template      = new Template($this->buttonFactory);
    }

    public function testGetCarouselFactory()
    {
        $carouselFactory = $this->template->getCarouselFactory();
        $this->assertSame($carouselFactory, $this->template->getCarouselFactory());
        $this->assertInstanceOf(Carousel::class, $carouselFactory);
    }
}
