<?php

namespace Example;

use Twilio\Comms\TwilioComms;
use Twilio\Comms\Emails\Requests\EmailsListOperationsRequest;
use DateTime;
use Twilio\Comms\Types\CommunicationOperationStatus;

$client = new TwilioComms(
    accountId: '<username>',
    authToken: '<password>',
);
$client->emails->listOperations(
    new EmailsListOperationsRequest([
        'startDate' => new DateTime('2024-01-15T09:30:00Z'),
        'endDate' => new DateTime('2024-01-15T09:30:00Z'),
        'status' => CommunicationOperationStatus::Scheduled->value,
        'pageToken' => 'pageToken',
        'pageSize' => 50,
    ]),
);
