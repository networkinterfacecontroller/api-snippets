using Twilio.Comms;
using System.Threading.Tasks;
using Twilio.Comms.PushNotifications;

public partial class Examples
{
    public async Task Example() {
        var client = new TwilioComms(
            accountId: "<username>",
            authToken: "<password>"
        );

        await client.PushNotifications.Apps.UpdateAsync(
            "appName",
            new AppsUpdateRequest {
                IsDefault = true
            }
        );
    }

}
