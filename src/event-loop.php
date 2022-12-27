<?php

namespace Nelwhix\ReactPhpL01;

require 'vendor/autoload.php';

use React\EventLoop\Loop;

$loop = Loop::get();

$timer = $loop->addPeriodicTimer(1, function () {
   echo "Hello" . PHP_EOL;
});

$loop->addTimer(5, function () use ($timer) {
    Loop::cancelTimer($timer);
});

$loop->run();

