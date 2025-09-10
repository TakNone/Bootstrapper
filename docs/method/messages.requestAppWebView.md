# messages.requestAppWebView

**Description** : *Open a bot mini app from a direct Mini App deep link, sending over user information after user confirmation*

**Layer** : 214

```tl
messages.requestAppWebView#53618bce flags:# write_allowed:flags.0?true compact:flags.7?true fullscreen:flags.8?true peer:InputPeer app:InputBotApp start_param:flags.1?string theme_params:flags.2?DataJSON platform:string = WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **write_allowed** | [`flags.0?true`](type/true) | Set this flag if the bot is asking permission to send messages to the user as specified in the direct Mini App deep link docs, and the user agreed |
| **compact** | [`flags.7?true`](type/true) | If set, requests to open the mini app in compact mode (as opposed to normal or fullscreen mode). Must be set if the mode parameter of the direct Mini App deep link is equal to compact |
| **fullscreen** | [`flags.8?true`](type/true) | If set, requests to open the mini app in fullscreen mode (as opposed to compact or normal mode). Must be set if the mode parameter of the direct Mini App deep link is equal to fullscreen |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | If the client has clicked on the link in a Telegram chat, pass the chat's peer information; otherwise pass the bot's peer information, instead |
| <mark>app</mark> | [`InputBotApp`](type/InputBotApp) | The app obtained by invoking messages.getBotApp as specified in the direct Mini App deep link docs |
| **start_param** | [`flags.1?string`](type/string) | If the startapp query string parameter is present in the direct Mini App deep link, pass it to start_param |
| **theme_params** | [`flags.2?DataJSON`](type/DataJSON) | Theme parameters » |
| <mark>platform</mark> | [`string`](type/string) | Short name of the application; 0-64 English letters, digits, and underscores |

---

## Result

[WebViewResult](type/WebViewResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_APP_BOT_INVALID** | `400` | The bot_id passed in the inputBotAppShortName constructor is invalid |
| **BOT_APP_INVALID** | `400` | The specified bot app is invalid |
| **BOT_APP_SHORTNAME_INVALID** | `400` | The specified bot app short name is invalid |

---

## Example

```php
$webViewResult = $client->messages->requestAppWebView(
	write_allowed : true,
	compact : true,
	fullscreen : true,
	peer : $client->inputPeerEmpty(),
	app : $client->inputBotAppID(
		id : 7832692070371381087,
		access_hash : 7150913938608044830,
	),
	start_param : 'QJKZDdHBeWac4AhU',
	theme_params : $client->dataJSON(
		data : 'Pgy3brKxn09FwpvU',
	),
	platform : 'ZWldPJun9pgo2ckG',
);
```