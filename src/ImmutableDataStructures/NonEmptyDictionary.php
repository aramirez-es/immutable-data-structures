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
        $difference = $this->pair->compareTo(new Pair($key, null));

        if ($difference < 0) {
            return $this->right->get($key);
        }
        else if ($difference > 0) {
            return $this->left->get($key);
        }

        return $this->pair->getSecond();
    }

    public function set($key, $value)
    {
        $difference = $this->pair->compareTo(new Pair($key, $value));

        if ($difference < 0) {
            return new self($this->pair, $this->left, $this->right->set($key, $value));
        }
        else if ($difference > 0) {
            return new self($this->pair, $this->left->set($key, $value), $this->right);
        }

        return $this;
    }

    public function weight()
    {
        return 1 + $this->left->weight() + $this->right->weight();
    }

}
