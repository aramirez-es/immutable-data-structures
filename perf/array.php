<?php


return function($range) {
    $collection = [];
    // Set
    foreach ($range as $index) {
        $collection[openssl_random_pseudo_bytes(10)] = $index;
    }

    // Get
    foreach ($range as $index) {
        !empty($collection[openssl_random_pseudo_bytes(10)]);
    }

    return $collection;
};
