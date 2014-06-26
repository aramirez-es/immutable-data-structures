<?php

namespace ImmutableDataStructures;

interface Dictionary
{
    public function set($key, $value);
    public function get($key);
    public function isEmpty();
}
