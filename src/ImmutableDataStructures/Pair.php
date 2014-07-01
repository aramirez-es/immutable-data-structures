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

    public function compareTo(Pair $other)
    {
        $difference = strcmp($this->getFirst(), $other->getFirst());

        if ($difference < 0) {
            return -1;
        }
        else if ($difference > 0) {
            return 1;
        }

        return 0;
    }
}
