package com.example.usage;

import com.twilio.sdk.TwilioComms;
import com.twilio.sdk.resources.pushnotifications.apps.requests.AppsUpdateRequest;

public class Example {
    public static void main(String[] args) {
        TwilioComms client = TwilioComms
            .builder()
            .credentials("<username>", "<password>")
            .build();

        client.pushNotifications().apps().update(
            "appName",
            AppsUpdateRequest
                .builder()
                .isDefault(true)
                .build()
        );
    }
}