# messages.requestMainWebView

**Description** : *Open a Main Mini App*

**Layer** : 211

```tl
messages.requestMainWebView#c9e01e7b flags:# compact:flags.7?true fullscreen:flags.8?true peer:InputPeer bot:InputUser start_param:flags.1?string theme_params:flags.0?DataJSON platform:string = WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **compact** | [`flags.7?true`](type/true) | If set, requests to open the mini app in compact mode (as opposed to normal or fullscreen mode). Must be set if the mode parameter of the Main Mini App link is equal to compact |
| **fullscreen** | [`flags.8?true`](type/true) | If set, requests to open the mini app in fullscreen mode (as opposed to compact or normal mode). Must be set if the mode parameter of the Main Mini App link is equal to fullscreen |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Currently open chat, may be inputPeerEmpty if no chat is currently open |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot that owns the main mini app |
| **start_param** | [`flags.1?string`](type/string) | Start parameter, if opening from a Main Mini App link » |
| **theme_params** | [`flags.0?DataJSON`](type/DataJSON) | Theme parameters » |
| <mark>platform</mark> | [`string`](type/string) | Short name of the application; 0-64 English letters, digits, and underscores |

---

## Result

[WebViewResult](type/WebViewResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$webViewResult = $client->messages->requestMainWebView(
	compact : true,
	fullscreen : true,
	peer : $client->inputPeerEmpty(),
	bot : $client->inputUserEmpty(),
	start_param : 'vMZQwkNtdGVqnCPc',
	theme_params : $client->dataJSON(
		data : '8YSuIXz5TfCZrdlQ',
	),
	platform : '1qxoskFhEvGTulzS',
);
```