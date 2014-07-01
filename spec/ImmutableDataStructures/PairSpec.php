<?php

namespace spec\ImmutableDataStructures;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use ImmutableDataStructures\Pair;

class PairSpec extends ObjectBehavior
{
    function it_should_compare_other_pair()
    {
        $this->beConstructedWith( 'key', 'value' );
        $this->compareTo( new Pair('key', 'value') )->shouldReturn( 0 );
        $this->compareTo( new Pair('key2', 'value') )->shouldReturn( -1 );
        $this->compareTo( new Pair('ke', 'value') )->shouldReturn( 1 );
    }
}
