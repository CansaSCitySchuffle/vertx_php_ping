<?php
Vertx::eventBus()->registerHandler("ping-address", function($message) {
    $message->reply('pong!');
//    print("send back pong php");
});
