<?php

require '../vendor/autoload.php';

use Sally\VkKeyboard\Contracts\Keyboard\Button\FactoryInterface;
use Sally\VkKeyboard\Facade;
use Sally\VkKeyboard\Object\Keyboard\Button\Text;
use VK\Client\VKApiClient;

$config = require_once 'config.php';
$access_token = $config['access_token'] ?? '';
$user_id_to_send_keyboard = $config['user_id_to_send_keyboard'] ?? '';

$vk = new VKApiClient();
$keyboard = Facade::createKeyboardBasic(function (FactoryInterface $factory) {
    return [
        [
            $factory->location([]),
        ],
        [
            $factory->text('Текстовая кнопка', ['button' => 1], Text::COLOR_RED),
            $factory->link('Кнопка с ссылкой', 'https://github.com/Sally-Framework/vk-keyboard', []),
        ],
        [
            $factory->pay('action=transfer-to-group&group_id=1&aid=10')
        ],
        [
            $factory->app('Кнопка приложения', 6979558, '-181108510', 'sendKeyboard')
        ]
    ];
});

$vk->messages()->send($config['access_token'], [
    'user_id'   => $config['user_id_to_send_keyboard'],
    'keyboard'  => $keyboard,
    'message'   => 'Тестовая клавиатура.',
    'random_id' => time(),
]);