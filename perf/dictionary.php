<?php


require __DIR__ . '/../vendor/autoload.php';

return function($writes, $reads) {
    $indexed    = [];
    $collection = new \ImmutableDataStructures\EmptyDictionary();
    // Set
    foreach ($writes as $index) {
        $key        = openssl_random_pseudo_bytes(10);
        $indexed[]  = $key;
        $collection = $collection->set($key, $index);
    }

    // Get
    foreach ($reads as $index) {
        ($collection->get($indexed[array_rand($indexed)]) !== null);
    }

    return $collection;
};
