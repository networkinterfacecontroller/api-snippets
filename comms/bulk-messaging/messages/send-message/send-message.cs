using Twilio.Comms;
using System.Threading.Tasks;
using System.Collections.Generic;
using OneOf;

public partial class Examples
{
    public async Task Example() {
        var client = new TwilioComms(
            accountId: "TWILIO_ACCOUNT_SID",
            authToken: "TWILIO_AUTH_TOKEN"
        );

        await client.Messages.SendAsync(
            new MessagesSendRequest {
                To = new List<OneOf<MessagesSendRequestToItemAddress, MessagesSendRequestToItemAddresses, MessagesSendRequestToItemMemoryStoreId>>(){
                    new MessagesSendRequestToItemAddress {
                        Address = "+14153902337",
                        Channel = MessageAddressChannel.Phone
                    },
                }
                ,
                Content = new MessageContentTextWithMedia {
                    Text = "Hello, World!"
                }
            }
        );
    }

}
