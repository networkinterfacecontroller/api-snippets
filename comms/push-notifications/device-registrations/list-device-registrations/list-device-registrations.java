package com.example.usage;

import com.twilio.sdk.TwilioComms;
import com.twilio.sdk.resources.pushnotifications.deviceregistrations.requests.DeviceRegistrationsListRequest;

public class Example {
    public static void main(String[] args) {
        TwilioComms client = TwilioComms
            .builder()
            .credentials("<username>", "<password>")
            .build();

        client.pushNotifications().deviceRegistrations().list(
            DeviceRegistrationsListRequest
                .builder()
                .userId("comms_pushnotificationuser_01h9krwprkeee8fzqspvwy6nq8")
                .appName("appName")
                .pageToken("pageToken")
                .pageSize(50)
                .build()
        );
    }
}