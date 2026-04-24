<?php

namespace Example;

use Twilio\Comms\TwilioComms;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->emails->fetch(
    'comms_email_01h9krwprkeee8fzqspvwy6nq8',
);
