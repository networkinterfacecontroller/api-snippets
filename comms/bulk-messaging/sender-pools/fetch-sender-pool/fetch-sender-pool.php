<?php

namespace Example;

use Twilio\Comms\TwilioComms;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->senderPools->fetch(
    'comms_senderpool_01h9krwprkeee8fzqspvwy6nq8',
);
