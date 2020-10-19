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
      'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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
