require "twiliocomms"

client = TwilioComms::Client.new(
  account_id: "<username>",
  auth_token: "<password>"
)

client.sender_pools.create(
  name: "Sales Leads - APAC",
  tags: {
    region: "APAC"
  }
)
