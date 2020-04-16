<?php
/**
 * Created by PhpStorm.
 * User: n0tm
 * Date: 15.12.19
 * Time: 2:57
 */

namespace Sally\VkKeyboard\Object\Template\Carousel\Element;

use Sally\VkKeyboard\Contracts\Template\Carousel\Element\FactoryInterface;

class Factory implements FactoryInterface {

    public function openLink(
        string $link,
        array $buttons,
        ?string $title = null,
        ?string $description = null,
        ?string $photoId = null
    ): OpenLink {
        return new OpenLink($link, $buttons, $title, $description, $photoId);
    }

    public function openPhoto(
        array $buttons,
        ?string $title = null,
        ?string $description = null,
        ?string $photoId = null
    ): OpenPhoto {
        return new OpenPhoto($buttons, $title, $description, $photoId);
    }
}