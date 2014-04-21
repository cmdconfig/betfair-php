<?php

namespace spec\Betfair\Event;

use Betfair\Adapter\AdapterInterface;
use Betfair\Client\BetfairClientInterface;
use Betfair\Client\BetfairJsonRpcClientInterface;
use Betfair\CredentialInterface;
use Betfair\Dependency\BetfairContainer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EventTypeSpec extends ObjectBehavior
{
    function let(
        BetfairClientInterface $client,
        AdapterInterface $adapterInterface,
        BetfairContainer $container
    )
    {
        $this->beConstructedWith($client, $adapterInterface, $container);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Betfair\Event\EventType');
    }
}