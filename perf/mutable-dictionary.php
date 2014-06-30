<?php


require __DIR__ . '/../vendor/autoload.php';

return function($writes, $reads) {
    $indexed    = [];
    $collection = new ComparativeDataStructures\Dictionary();
    // Set
    foreach ($writes as $index) {
        $key        = substr(sha1(uniqid()), 0, 6);
        $indexed[]  = $key;
        $collection->set($key, $index);
    }

    // Get
    foreach ($reads as $index) {
        ($collection->get($indexed[array_rand($indexed)]) !== null);
    }

    return $collection;
};
