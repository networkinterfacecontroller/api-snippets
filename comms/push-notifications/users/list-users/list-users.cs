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

        await client.PushNotifications.Users.ListAsync(
            new UsersListRequest {
                PageToken = "pageToken",
                PageSize = 50
            }
        );
    }

}
