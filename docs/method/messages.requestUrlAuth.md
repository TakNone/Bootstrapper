# messages.requestUrlAuth

**Description** : *Get more info about a Seamless Telegram Login authorization request, for more info click here &raquo;*

**Layer** : 218

```tl
messages.requestUrlAuth#198fb446 flags:# peer:flags.1?InputPeer msg_id:flags.1?int button_id:flags.1?int url:flags.2?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **peer** | [`flags.1?InputPeer`](type/InputPeer) | Peer where the message is located |
| **msg_id** | [`flags.1?int`](type/int) | The message |
| **button_id** | [`flags.1?int`](type/int) | The ID of the button with the authorization request |
| **url** | [`flags.2?string`](type/string) | URL used for link URL authorization, click here for more info » |

---

## Result

[UrlAuthResult](type/UrlAuthResult)

---

## Example

```php
$urlAuthResult = $client->messages->requestUrlAuth(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 84,
	button_id : 94,
	url : 'https://docs.liveproto.dev',
);
```