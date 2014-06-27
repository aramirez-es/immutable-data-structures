<?php


return function($writes, $reads) {
    $collection = new \SplFixedArray(count($writes));
    // Set
    foreach ($writes as $index) {
        $collection[$index] = $index;
    }

    // Get
    foreach ($reads as $index) {
        !empty($collection[$index]);
    }

    return $collection;
};
