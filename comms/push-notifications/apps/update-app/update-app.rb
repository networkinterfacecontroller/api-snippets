require "twiliocomms"

client = TwilioComms::Client.new(
  account_id: "<username>",
  auth_token: "<password>"
)

client.push_notifications.apps.update(
  app_name: "appName",
  is_default: true
)
