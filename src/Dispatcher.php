<?php

namespace Jag\Contracts\GooglePubSub;

use Google\Cloud\PubSub\Message;

interface Dispatcher
{
    /**
     * @param string          $subscription
     * @param \Closure|string $listener
     *
     * @return void
     */
    public function listen(string $subscription, $listener) : void;

    /**
     * @param string                       $subscription
     * @param \Google\Cloud\PubSub\Message $payload
     * @param bool                         $halt
     *
     * @return array|mixed|null
     */
    public function dispatch(string $subscription, Message $payload, $halt = false);
}
