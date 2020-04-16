<?php

namespace Sally\VkKeyboard;

use Sally\VkKeyboard\Contracts;

class Factory implements Contracts\FactoryInterface
{
    /**
     * @var Contracts\Factory\TemplateInterface
     */
    private $templateFactory;

    /**
     * @var Contracts\Factory\KeyboardInterface
     */
    private $keyboardFactory;

    public function getTemplateFactory(): Contracts\Factory\TemplateInterface
    {
        if ($this->templateFactory === null) {
            $this->templateFactory = new Factory\Template($this->getKeyboardFactory()->getButtonFactory());
        }

        return $this->templateFactory;
    }

    public function getKeyboardFactory(): Contracts\Factory\KeyboardInterface
    {
        if ($this->keyboardFactory === null) {
            $this->keyboardFactory = new Factory\Keyboard();
        }

        return $this->keyboardFactory;
    }

}