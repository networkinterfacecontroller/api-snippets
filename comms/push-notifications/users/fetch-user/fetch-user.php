<?php

namespace Example;

use Twilio\Comms\TwilioComms;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->pushNotifications->users->fetch(
    'comms_pushnotificationuser_01h9krwprkeee8fzqspvwy6nq8',
);
