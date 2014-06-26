<?php

namespace ImmutableDataStructures;

class NonEmptyDictionary implements Dictionary
{
    private $pair;
    private $other;

    function __construct(Pair $pair, Dictionary $other)
    {
        $this->pair = $pair;
        $this->other = $other;
    }

    public function isEmpty()
    {
        return false;
    }

    public function get($key)
    {
        return $this->pair->getFirst() === $key
            ? $this->pair->getSecond()
            : $this->other->get($key);
    }

    public function set($key, $value)
    {
        return new self(new Pair($key, $value), $this);
    }


}
