<?php

// EMOJI!

require_once 'vendor/autoload.php';

try {
  $bot = new \TelegramBot\Api\Client(
    '1154181768:AAEU8Rx6H7GeMYlrUkT3pysRfTCifEyPAg0'
  );

  $bot->command('awesome', function ($message) use ($bot) {
    $bot->sendMessage($message->getChat()->getId(), '1234567890');
  });

  $bot->command('video', function ($message) use ($bot) {
    $videoFile = new \CURLFile(
      'https://raw.githubusercontent.com/TelegramBots/book/master/src/docs/video-countdown.mp4'
    );

    $bot->sendVideo(
      $message->getChat()->getId(),
      $videoFile,
      null,
      '🌎﻿Теперь Вы понимаете, какая миссия  нам с Вами предстоит? Громко конечно звучит - спасаем планету, однако, используя меньше химии, мы в первую очередь делаем хорошо себе!﻿😉﻿
Что же это за чудный продукт, который сегодня нужен каждому человеку и почему его выгодно использовать?
Об этом будет следующее видео. 17 минут информации о продукции. Видео будет интересным!',
      null,
      null,
      null,
      true
    );
  });

  $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
  $e->getMessage();
}
