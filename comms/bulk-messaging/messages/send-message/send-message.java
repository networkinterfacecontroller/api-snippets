package com.example.usage;

import com.twilio.sdk.TwilioComms;
import com.twilio.sdk.resources.messages.requests.MessagesSendRequest;
import com.twilio.sdk.resources.messages.types.MessagesSendRequestContent;
import com.twilio.sdk.resources.messages.types.MessagesSendRequestToItem;
import com.twilio.sdk.resources.messages.types.MessagesSendRequestToItemAddress;
import com.twilio.sdk.types.MessageAddressChannel;
import com.twilio.sdk.types.MessageContentTextWithMedia;
import java.util.Arrays;
import java.util.Optional;

public class Example {
    public static void main(String[] args) {
        TwilioComms client = TwilioComms
            .builder()
            .credentials("TWILIO_ACCOUNT_SID", "TWILIO_AUTH_TOKEN")
            .build();

        client.messages().send(
            MessagesSendRequest
                .builder()
                .content(
                    MessagesSendRequestContent.of(
                        MessageContentTextWithMedia
                            .builder()
                            .text(Optional.of("Hello, World!"))
                            .build()
                    )
                )
                .to(
                    Arrays.asList(
                        MessagesSendRequestToItem.of(
                            MessagesSendRequestToItemAddress
                                .builder()
                                .address("+14153902337")
                                .channel(MessageAddressChannel.PHONE)
                                .build()
                        )
                    )
                )
                .build()
        );
    }
}