<?php

namespace Jag\Contracts\GooglePubSub;

interface SubscriberClient
{
    /**
     * @return \Google\Cloud\PubSub\PubSubClient|\Jag\Contracts\GooglePubSub\PubSubClient
     */
    public function getClient();

    /**
     * Get the limit of messages pulled
     * https://googleapis.github.io/google-cloud-php/#/docs/google-cloud/v0.132.0/pubsub/subscription?method=pull
     * Usual default: 1000
     *
     * @return int
     */
    public function getMaxMessages() : int;

    /**
     * If true, the system will respond immediately, even if no messages are available. Otherwise, wait until new
     * messages are available. Usual default: false
     *
     * @return bool
     */
    public function isReturnImmediately() : bool;
}
