<?php

namespace Sally\VkKeyboard;

use Sally\VkKeyboard\Contracts\FactoryInterface;

class Facade
{
    public static function createBasicKeyboard(callable $callback, bool $oneTime = true): string
    {
        return self::getConverter()
            ->keyboard()
            ->basic($callback, $oneTime);
    }

    public static function createInlineKeyboard(callable $callback): string
    {
        return self::getConverter()
            ->keyboard()
            ->inline($callback);
    }

    public static function createBasicCarousel(callable $callback): string
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