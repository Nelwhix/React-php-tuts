<?php

namespace Nelwhix\ReactPhpL01;

use React\EventLoop\Loop;
use React\Socket\ConnectionInterface;
use React\Socket\SocketServer;

require 'vendor/autoload.php';

$loop = Loop::get();

$server = new SocketServer(
    uri: "127.0.0.1:8888",
    loop: $loop
);

$server->on("connection", function (ConnectionInterface $connection) {
   $connection->write("Hello");
});

$loop->run();