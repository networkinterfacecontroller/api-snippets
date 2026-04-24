<?php

namespace Example;

use Twilio\Comms\TwilioComms;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->pushNotifications->apps->fetch(
    'appName',
);
