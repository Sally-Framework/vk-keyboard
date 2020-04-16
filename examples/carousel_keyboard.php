<?php

require '../vendor/autoload.php';

use Sally\VkKeyboard\Contracts\Keyboard\Button\FactoryInterface as ButtonFactoryInterface;
use Sally\VkKeyboard\Contracts\Template\Carousel\Element\FactoryInterface as CarouselElementInterface;
use Sally\VkKeyboard\Facade;
use VK\Client\VKApiClient;

$config = require_once 'config.php';
$access_token = $config['access_token'] ?? '';
$user_id_to_send_keyboard = $config['user_id_to_send_keyboard'] ?? '';

$vk = new VKApiClient();
$templateWithOpenLink = Facade::createCarousel(function (CarouselElementInterface $elementFactory, ButtonFactoryInterface $buttonFactory) {
    return [
        $elementFactory->openLink('https://github.com/Sally-Framework/vk-keyboard', [
            $buttonFactory->location(['button' => 'location']),
            $buttonFactory->pay('action=transfer-to-group&group_id=1&aid=10'),
            $buttonFactory->link('Кнопка с ссылкой', 'https://github.com/Sally-Framework/vk-keyboard', []),
        ], 'Карусель Open Link', 'По нажатию вы перейдёте по ссылке', '-109837093_457242809'),
        $elementFactory->openLink('https://github.com/Sally-Framework/vk-keyboard', [
            $buttonFactory->location(['button' => 'location']),
            $buttonFactory->pay('action=transfer-to-group&group_id=1&aid=10'),
            $buttonFactory->link('Кнопка с ссылкой', 'https://github.com/Sally-Framework/vk-keyboard', []),
        ], 'Карусель Open Link', 'По нажатию вы перейдёте по ссылке', '-109837093_457242809'),
        $elementFactory->openLink('https://github.com/Sally-Framework/vk-keyboard', [
            $buttonFactory->location(['button' => 'location']),
            $buttonFactory->pay('action=transfer-to-group&group_id=1&aid=10'),
            $buttonFactory->link('Кнопка с ссылкой', 'https://github.com/Sally-Framework/vk-keyboard', []),
        ], 'Карусель Open Link', 'По нажатию вы перейдёте по ссылке', '-109837093_457242809'),
    ];
});

$templateWithOpenPhoto = Facade::createCarousel(function (CarouselElementInterface $elementFactory, ButtonFactoryInterface $buttonFactory) {
    return [
        $elementFactory->openPhoto([
            $buttonFactory->location(['button' => 'location']),
            $buttonFactory->pay('action=transfer-to-group&group_id=1&aid=10'),
            $buttonFactory->link('Кнопка с ссылкой', 'https://github.com/Sally-Framework/vk-keyboard', []),
        ], 'Карусель Open Photo', 'По нажатию у вас откроется картинка', '-109837093_457242809'),
        $elementFactory->openPhoto([
            $buttonFactory->location(['button' => 'location']),
            $buttonFactory->pay('action=transfer-to-group&group_id=1&aid=10'),
            $buttonFactory->link('Кнопка с ссылкой', 'https://github.com/Sally-Framework/vk-keyboard', []),
        ], 'Карусель Open Photo', 'По нажатию у вас откроется картинка', '-109837093_457242809'),
        $elementFactory->openPhoto([
            $buttonFactory->location(['button' => 'location']),
            $buttonFactory->pay('action=transfer-to-group&group_id=1&aid=10'),
            $buttonFactory->link('Кнопка с ссылкой', 'https://github.com/Sally-Framework/vk-keyboard', []),
        ], 'Карусель Open Photo', 'По нажатию у вас откроется картинка', '-109837093_457242809'),
    ];
});

$vk->messages()->send($config['access_token'], [
    'user_id'   => $config['user_id_to_send_keyboard'],
    'template'  => $templateWithOpenLink,
    'message'   => 'Тестовая клавиатура с каруселью open link.',
    'random_id' => time(),
]);

$vk->messages()->send($config['access_token'], [
    'user_id'   => $config['user_id_to_send_keyboard'],
    'template'  => $templateWithOpenPhoto,
    'message'   => 'Тестовая клавиатура с каруселью open photo.',
    'random_id' => time() + 1,
]);