<?php

namespace Nelwhix\ReactPhpL01;

use React\EventLoop\Loop;
use React\Stream\ReadableResourceStream;

require 'vendor/autoload.php';



try {
    $loop = Loop::get();

    $file = fopen("test.txt", "r");

    $readable = new ReadableResourceStream($file, $loop);

    $readable->on('data', function ($data) {
        echo $data . PHP_EOL;
    });

    $loop->run();
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}

