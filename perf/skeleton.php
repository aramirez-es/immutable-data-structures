<?php

ini_set('memory_limit', -1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$start = microtime(true);

$writes = 0.3;
$reads  = 0.7;

{
    $to         = isset($argv[1]) ? (int) $argv[1] : 10000;
    $test       = (isset($argv[2]) && in_array($argv[2], array( 'array', 'dictionary' ))) ? $argv[2] : 'array';
    $function   = include __DIR__ . "/{$test}.php";
    $result     = $function(range(0, round($to * $writes)), range(0, round($to * $reads)));
}

$end                = number_format(microtime(true) - $start, 3);
$memory_peak        = number_format(memory_get_peak_usage() / pow(1024, 2), 3);
$memory_peak_real   = number_format(memory_get_peak_usage(true) / pow(1024, 2), 3);


$writes_percent = $writes * 100;
$reads_percent  = $reads * 100;

echo PHP_EOL;
echo <<<EOT
    Performed test      : "{$test} / {$to} ops ({$writes_percent}% writes / {$reads_percent}% reads)".
    Time taken          : "{$end} seg".
    Memory Peak         : "{$memory_peak} MB".
    Memory Peak (real)  : "{$memory_peak_real} MB".
EOT;
echo PHP_EOL, PHP_EOL;
