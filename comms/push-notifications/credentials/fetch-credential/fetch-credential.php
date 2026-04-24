<?php

namespace Example;

use Twilio\Comms\TwilioComms;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->pushNotifications->credentials->fetch(
    'comms_credential_01h9krwprkeee8fzqspvwy6nq8',
);
