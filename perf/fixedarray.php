<?php


return function($range) {
    $collection = new \SplFixedArray(count($range));
    // Set
    foreach ($range as $index) {
        $collection[$index] = $index;
    }

    // Get
    foreach ($range as $index) {
        !empty($collection[$index]);
    }

    return $collection;
};
