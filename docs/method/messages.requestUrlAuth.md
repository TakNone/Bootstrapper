# messages.requestUrlAuth

**Description** : *Get more info about a Seamless Telegram Login authorization request, for more info click here &raquo;*

**Layer** : 233

```tl
messages.requestUrlAuth#894cc99c flags:# peer:flags.1?InputPeer msg_id:flags.1?int button_id:flags.1?int url:flags.2?string in_app_origin:flags.3?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **peer** | [`flags.1?InputPeer`](type/InputPeer) | Peer where the message is located |
| **msg_id** | [`flags.1?int`](type/int) | The message |
| **button_id** | [`flags.1?int`](type/int) | The ID of the button with the authorization request |
| **url** | [`flags.2?string`](type/string) | URL used for link URL authorization, click here for more info » |
| **in_app_origin** | [`flags.3?string`](type/string) | For OAuth authorization from mini apps »: the origin of the webview that originated the OAuth request, in the format scheme://host (or scheme://host:port for non-default ports) |

---

## Result

[UrlAuthResult](type/UrlAuthResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **OAUTH_REQUEST_INVALID** | `500` | The specified OAuth request is invalid |
| **URL_EXPIRED** | `400` | The specified OAuth request has expired |
| **URL_INVALID** | `400` | Invalid URL provided |

---

## Example

```php
$urlAuthResult = $client->messages->requestUrlAuth(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 80,
	button_id : 68,
	url : 'https://docs.liveproto.dev',
	in_app_origin : 'Rp6ZfYEaFlDjmydM',
);
```