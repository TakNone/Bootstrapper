# keyboardButtonCallback

**Description** : *Callback button*

**Layer** : 216

```tl
keyboardButtonCallback#35bbdb6b flags:# requires_password:flags.0?true text:string data:bytes = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **requires_password** | [`flags.0?true`](type/true) | Whether the user should verify his identity by entering his 2FA SRP parameters to the messages.getBotCallbackAnswer method. NOTE: telegram and the bot WILL NOT have access to the plaintext password, thanks to SRP. This button is mainly used by the official @botfather bot, for verifying the user's identity before transferring ownership of a bot to another user |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>data</mark> | [`bytes`](type/bytes) | Callback data |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonCallback(
	requires_password : true,
	text : 'qXAsPBZCdFou3Njh',
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```