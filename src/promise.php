<?php

namespace Nelwhix\ReactPhpL01;

use React\Promise\Deferred;

require 'vendor/autoload.php';

function http(string $url, string $method) {
    $response = null;
    sleep(10);
    $deferred = new Deferred();

    if ($response) {
        $deferred->resolve($response);
    } else {
        $deferred->reject(new \Exception("No response"));
    }

    return $deferred->promise();
}

http("https://nelsonisioma.com", "GET")
    ->then(
        function ($response) {
            echo $response . PHP_EOL;
        },
    )->otherwise(
        function (\Exception $e) {
            echo $e->getMessage(). PHP_EOL;
        }
    );
