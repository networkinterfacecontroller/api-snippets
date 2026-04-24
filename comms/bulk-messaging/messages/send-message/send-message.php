<?php

namespace Example;

use Twilio\Comms\TwilioComms;
use Twilio\Comms\Messages\Requests\MessagesSendRequest;
use Twilio\Comms\Messages\Types\MessagesSendRequestToItemAddress;
use Twilio\Comms\Types\MessageAddressChannel;
use Twilio\Comms\Types\MessageContentTextWithMedia;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->messages->send(
    new MessagesSendRequest([
        'to' => [
            new MessagesSendRequestToItemAddress([
                'address' => '+14153902337',
                'channel' => MessageAddressChannel::Phone->value,
            ]),
        ],
        'content' => new MessageContentTextWithMedia([
            'text' => 'Hello, World!',
        ]),
    ]),
);
