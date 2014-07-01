<?php

namespace ComparativeDataStructures;

use ImmutableDataStructures\Dictionary as DictionaryInterface;
use ImmutableDataStructures\Pair;

class Dictionary implements DictionaryInterface
{
    private $pair;
    private $left;
    private $right;

    public function isEmpty()
    {
        return empty($this->pair);
    }

    public function get($key)
    {
        if ($this->isEmpty()) {
            return null;
        }
        else {
            $difference = $this->pair->compareTo(new Pair($key, null));

            if ($difference < 0) {
                return $this->right->get($key);
            }
            else if ($difference > 0) {
                return $this->left->get($key);
            }

            return $this->pair->getSecond();
        }
    }

    public function set($key, $value)
    {
        if ($this->isEmpty()) {
            $this->pair     = new Pair($key, $value);
            $this->left     = new self;
            $this->right    = new self;
        }
        else {
            $difference = $this->pair->compareTo(new Pair($key, $value));

            if ($difference < 0) {
                $this->right->set($key, $value);
            }
            else if ($difference > 0) {
                $this->left->set($key, $value);
            }
        }

        return $this;
    }

    public function weight()
    {
        if ($this->isEmpty()) {
            return 0;
        }
        return 1 + $this->left->weight() + $this->right->weight();
    }
}
