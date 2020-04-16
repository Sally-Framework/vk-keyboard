<?php

namespace Sally\VkKeyboard\Object\Keyboard\Button;

class Pay extends AbstractButton {

    private const KEY_HASH = 'hash';

    /**
     * @var string
     */
    private $hash;

    public function __construct(string $hash) {
        $this->hash = $hash;
    }

    protected function action(): array {
        return [
            self::KEY_HASH => $this->hash
        ];
    }

    protected function type(): string {
        return 'vkpay';
    }
}