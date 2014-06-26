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

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @return mixed
     */
    public function getSecond()
    {
        return $this->second;
    }
}