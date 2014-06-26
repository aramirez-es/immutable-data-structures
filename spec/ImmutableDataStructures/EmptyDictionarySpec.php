<?php

namespace spec\ImmutableDataStructures;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmptyDictionarySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ImmutableDataStructures\EmptyDictionary');
    }

    function it_should_be_empty()
    {
        $this->isEmpty()->shouldReturn(true);
    }

    function it_should_set_new_element()
    {
        $this->set('key', 'value')->get('key')->shouldReturn('value');
    }

    function it_should_be_not_empty()
    {
        $this->set('key', 'value')->isEmpty()->shouldReturn(false);
    }

    function it_should_set_more_elements()
    {
        $this
            ->set('key', 'value')
            ->set('k2', 'v2')
            ->set('k3', 'v3')
            ->get('k2')
            ->shouldReturn('v2');
    }
}
