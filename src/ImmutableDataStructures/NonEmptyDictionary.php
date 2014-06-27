<?php

namespace ImmutableDataStructures;

class NonEmptyDictionary implements Dictionary
{
    private $pair;
    private $left;
    private $right;

    function __construct(Pair $pair, Dictionary $left, Dictionary $right)
    {
        $this->pair = $pair;
        $this->left = $left;
        $this->right = $right;
    }

    public function isEmpty()
    {
        return false;
    }

    public function get($key)
    {
        if ($key < $this->pair->getFirst()) {
            return $this->left->get($key);
        }
        else if ($this->pair->getFirst() < $key) {
            return $this->right->get($key);
        }
        else {
            return $this->pair->getSecond();
        }
    }

    public function set($key, $value)
    {
        if ($key < $this->pair->getFirst()) {
            return new self($this->pair, $this->left->set($key, $value), $this->right);
        }
        else if ($this->pair->getFirst() < $key) {
            return new self($this->pair, $this->left, $this->right->set($key, $value));
        }
        else {
            return $this;
        }
    }


}
