# inputKeyboardButtonUrlAuth

**Description** : *Button to request a user to authorize via URL using Seamless Telegram Login*

**Layer** : 218

```tl
inputKeyboardButtonUrlAuth#d02e7fd4 flags:# request_write_access:flags.0?true text:string fwd_text:flags.1?string url:string bot:InputUser = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **request_write_access** | [`flags.0?true`](type/true) | Set this flag to request the permission for your bot to send messages to the user |
| <mark>text</mark> | [`string`](type/string) | Button text |
| **fwd_text** | [`flags.1?string`](type/string) | New text of the button in forwarded messages |
| <mark>url</mark> | [`string`](type/string) | An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->inputKeyboardButtonUrlAuth(
	request_write_access : true,
	text : 'G75iR8HdFg0BmX4t',
	fwd_text : 'hkQRlA2BYr9FM8eL',
	url : 'https://docs.liveproto.dev',
	bot : $client->get_input_user(peer : '@TakNone'),
);
```