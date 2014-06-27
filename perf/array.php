<?php


return function($writes, $reads) {
    $indexed    = [];
    $collection = [];
    // Set
    foreach ($writes as $index) {
        $key        = openssl_random_pseudo_bytes(10);
        $indexed[]  = $key;
        $collection[$key] = $index;
    }

    // Get
    foreach ($reads as $index) {
        !empty($collection[$indexed[array_rand($indexed)]]);
    }

    return $collection;
};
