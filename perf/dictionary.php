<?php


require __DIR__ . '/../vendor/autoload.php';

return function($range) {
    $collection = new \ImmutableDataStructures\EmptyDictionary();
    // Set
    foreach ($range as $index) {
        $collection = $collection->set(openssl_random_pseudo_bytes(10), $index);
    }

    // Get
    foreach ($range as $index) {
        ($collection->get(openssl_random_pseudo_bytes(10)) !== null);
    }

    return $collection;
};
