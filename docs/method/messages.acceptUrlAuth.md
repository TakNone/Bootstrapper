# messages.acceptUrlAuth

**Description** : *Use this to accept a Seamless Telegram Login authorization request, for more info click here &raquo;*

**Layer** : 211

```tl
messages.acceptUrlAuth#b12c7125 flags:# write_allowed:flags.0?true peer:flags.1?InputPeer msg_id:flags.1?int button_id:flags.1?int url:flags.2?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **write_allowed** | [`flags.0?true`](type/true) | Set this flag to allow the bot to send messages to you (if requested) |
| **peer** | [`flags.1?InputPeer`](type/InputPeer) | The location of the message |
| **msg_id** | [`flags.1?int`](type/int) | Message ID of the message with the login button |
| **button_id** | [`flags.1?int`](type/int) | ID of the login button |
| **url** | [`flags.2?string`](type/string) | URL used for link URL authorization, click here for more info » |

---

## Result

[UrlAuthResult](type/UrlAuthResult)

---

## Example

```php
$urlAuthResult = $client->messages->acceptUrlAuth(
	write_allowed : true,
	peer : $client->inputPeerEmpty(),
	msg_id : 4,
	button_id : 43,
	url : 'https://docs.liveproto.dev',
);
```