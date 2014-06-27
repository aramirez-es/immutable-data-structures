<?php

namespace ImmutableDataStructures;

class NonEmptyDictionary implements Dictionary
{
    private $pair;
    private $left;
    private $right;

    function __construct(Pair $pair, Dictionary $left, Dictionary $right)
    {
        $this->pair     = $pair;
        $this->left     = $left;
        $this->right    = $right;
    }

    public function isEmpty()
    {
        return false;
    }

    public function get($key)
    {
        $difference = strcmp($key, $this->pair->getFirst());

        if ($difference < 0) {
            return $this->left->get($key);
        }
        else if ($difference > 0) {
            return $this->right->get($key);
        }

        return $this->pair->getSecond();
    }

    public function set($key, $value)
    {
        $difference = strcmp($key, $this->pair->getFirst());

        if ($difference < 0) {
            return new self($this->pair, $this->left->set($key, $value), $this->right);
        }
        else if ($difference > 0) {
            return new self($this->pair, $this->left, $this->right->set($key, $value));
        }

        return $this;
    }


}
