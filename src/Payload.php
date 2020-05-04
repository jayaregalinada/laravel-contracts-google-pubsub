<?php

namespace Jag\Contracts\GooglePubSub;

use Google\Cloud\PubSub\Message;

interface Payload
{
    public function getMessage() : Message;
}
