<?php

namespace Example;

use Twilio\Comms\TwilioComms;
use Twilio\Comms\SenderPools\Requests\SenderPoolsCreateRequest;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->senderPools->create(
    new SenderPoolsCreateRequest([
        'name' => 'Sales Leads - APAC',
        'tags' => [
            'region' => 'APAC',
        ],
    ]),
);
