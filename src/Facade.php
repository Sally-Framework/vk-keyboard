<?php

namespace Sally\VkKeyboard;

use Sally\VkKeyboard\Contracts\FactoryInterface;

class Facade
{
    public static function createKeyboardBasic(callable $callback, bool $oneTime = true): string
    {
        return self::getConverter()
            ->keyboard()
            ->basic($callback, $oneTime);
    }

    public static function createKeyboardInline(callable $callback): string
    {
        return self::getConverter()
            ->keyboard()
            ->inline($callback);
    }

    public static function createCarousel(callable $callback): string
    {
        return self::getConverter()
            ->carousel()
            ->basic($callback);
    }

    private static function getConverter(): Converter
    {
        return new Converter(self::getFactory());
    }

    private static function getFactory(): FactoryInterface
    {
        return new Factory();
    }
}