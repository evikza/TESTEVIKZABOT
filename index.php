<?php

// EMOJI!

require_once 'vendor/autoload.php';

try {
  $bot = new \TelegramBot\Api\Client(
    '1154181768:AAEU8Rx6H7GeMYlrUkT3pysRfTCifEyPAg0'
  );

  $bot->command('video', function ($message) use ($bot) {
    $videoFile = new \CURLFile(
      'https://raw.githubusercontent.com/TelegramBots/book/master/src/docs/video-countdown.mp4'
    );

    $bot->sendVideo(
      $message->getChat()->getId(), // chatId — идентификатор чата
      $videoFile, // video — загружаемый файл
      null, // duration — длина видео
      'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', // caption — описание под видео
      null, // reply_to_message_id — см. документацию
      null, // reply_markup — см. документацию
      null, // disable_notification — см. документацию
      true // supports_streaming — подгрузка и автоматическое воспроизведение при получении сообщения. При необходимости — убрать
    );
  });

  $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
  $e->getMessage();
}
