<?php

ini_set('memory_limit', -1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$start = microtime(true);

{
    $to         = isset($argv[1]) ? (int) $argv[1] : 10000;
    $test       = (isset($argv[2]) && in_array($argv[2], array( 'array', 'dictionary', 'fixedarray' ))) ? $argv[2] : 'array';
    $function   = include __DIR__ . "/{$test}.php";
    $result     = $function(range(0, $to));
}

$end                = number_format(microtime(true) - $start, 3);
$memory_peak        = number_format(memory_get_peak_usage() / pow(1024, 2), 3);
$memory_peak_real   = number_format(memory_get_peak_usage(true) / pow(1024, 2), 3);

echo PHP_EOL;
echo <<<EOT
    Performed test      : "{$test} / {$to} iterations".
    Time taken          : "{$end} seg".
    Memory Peak         : "{$memory_peak} MB".
    Memory Peak (real)  : "{$memory_peak_real} MB".
EOT;
echo PHP_EOL, PHP_EOL;
