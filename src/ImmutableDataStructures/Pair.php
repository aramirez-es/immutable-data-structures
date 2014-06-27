<?php

namespace ImmutableDataStructures;


class Pair {
    private $first;
    private $second;

    function __construct($first, $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function getFirst()
    {
        return $this->first;
    }

    public function getSecond()
    {
        return $this->second;
    }
}
