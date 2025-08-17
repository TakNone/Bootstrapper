# keyboardButtonUrlAuth

**Description** : *Button to request a user to authorize via URL using Seamless Telegram Login. When the user clicks on such a button, messages.requestUrlAuth should be called, providing the button_id and the ID of the container message. The returned urlAuthResultRequest object will contain more details about the authorization request (request_write_access if the bot would like to send messages to the user along with the username of the bot which will be used for user authorization). Finally, the user can choose to call messages.acceptUrlAuth to get a urlAuthResultAccepted with the URL to open instead of the url of this constructor, or a urlAuthResultDefault, in which case the url of this constructor must be opened, instead. If the user refuses the authorization request but still wants to open the link, the url of this constructor must be used*

**Layer** : 211

```tl
keyboardButtonUrlAuth#10b78d29 flags:# text:string fwd_text:flags.0?string url:string button_id:int = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>text</mark> | [`string`](type/string) | Button label |
| **fwd_text** | [`flags.0?string`](type/string) | New text of the button in forwarded messages |
| <mark>url</mark> | [`string`](type/string) | An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.NOTE: Services must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization |
| <mark>button_id</mark> | [`int`](type/int) | ID of the button to pass to messages.requestUrlAuth |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonUrlAuth(
	text : 'Hk7jsqiwxDlE0gZb',
	fwd_text : 'oms3n1cLifhUPa7R',
	url : 'https://docs.liveproto.dev',
	button_id : 69,
);
```