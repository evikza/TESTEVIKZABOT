<?php

// EMOJI!

require_once 'vendor/autoload.php';

try {
  $bot = new \TelegramBot\Api\Client(
    '1154181768:AAEU8Rx6H7GeMYlrUkT3pysRfTCifEyPAg0'
  );

  $bot->command('/sendString', function ($message) use ($bot) {
    $bot->sendMessage($message->getChat()->getId(), uniqid('', true));
  });

  $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
  $e->getMessage();
}