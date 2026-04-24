require "twiliocomms"

client = TwilioComms::Client.new(
  account_id: "<username>",
  auth_token: "<password>"
)

client.messages.seek_by_identifier(identifier: "identifier")
