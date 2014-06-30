<?php


return function($writes, $reads) {
    $indexed    = [];
    $collection = [];
    // Set
    foreach ($writes as $index) {
        $key        = substr(sha1(uniqid()), 0, 6);
        $indexed[]  = $key;
        $collection[$key] = $index;
    }

    // Get
    foreach ($reads as $index) {
        !empty($collection[$indexed[array_rand($indexed)]]);
    }

    return $collection;
};
