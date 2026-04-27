from twilio_comms import TwilioComms

client = TwilioComms(
    account_id="TWILIO_ACCOUNT_SID",
    auth_token="TWILIO_AUTH_TOKEN",
)

client.messages.send(
    to=[
        {
            "address": "+14153902337",
            "channel": "PHONE"
        }
    ],
    content={
        "text": "Hello, World!"
    },
)
