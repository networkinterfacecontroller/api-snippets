package com.example.usage;

import com.twilio.sdk.TwilioComms;

public class Example {
    public static void main(String[] args) {
        TwilioComms client = TwilioComms
            .builder()
            .credentials("<username>", "<password>")
            .build();

        client.messages().seekByIdentifier("identifier");
    }
}