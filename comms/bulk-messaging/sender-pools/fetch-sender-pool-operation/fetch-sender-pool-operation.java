package com.example.usage;

import com.twilio.sdk.TwilioComms;

public class Example {
    public static void main(String[] args) {
        TwilioComms client = TwilioComms
            .builder()
            .credentials("<username>", "<password>")
            .build();

        client.senderPools().fetchOperation("comms_operation_01h9krwprkeee8fzqspvwy6nq8");
    }
}