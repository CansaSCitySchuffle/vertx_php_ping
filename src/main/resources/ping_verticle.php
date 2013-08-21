<?php
print("Hello!");
Vertx::eventBus()->registerHandler("ping_address", function($message) {
    $message->reply('pong!');
    print("send back pong php");
});
