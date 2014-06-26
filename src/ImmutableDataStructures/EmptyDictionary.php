<?php

namespace ImmutableDataStructures;

class EmptyDictionary implements Dictionary
{
    public function isEmpty()
    {
        return true;
    }

    public function set($key, $value)
    {
        return new NonEmptyDictionary(new Pair($key, $value), $this);
    }

    public function get($key)
    {
        return null;
    }
}
