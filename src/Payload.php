<?php

namespace Jag\Contracts\GooglePubSub;

use Google\Cloud\PubSub\Topic;
use Google\Cloud\PubSub\Message;

interface Payload
{
    public function getMessage(Topic $topic, $event, array $payload = []) : Message;
}
