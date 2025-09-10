# messages.requestSimpleWebView

**Description** : *Open a bot mini app*

**Layer** : 214

```tl
messages.requestSimpleWebView#413a3e73 flags:# from_switch_webview:flags.1?true from_side_menu:flags.2?true compact:flags.7?true fullscreen:flags.8?true bot:InputUser url:flags.3?string start_param:flags.4?string theme_params:flags.0?DataJSON platform:string = WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **from_switch_webview** | [`flags.1?true`](type/true) | Whether the webapp was opened by clicking on the switch_webview button shown on top of the inline results list returned by messages.getInlineBotResults |
| **from_side_menu** | [`flags.2?true`](type/true) | Set this flag if opening the Mini App from the installed side menu entry » |
| **compact** | [`flags.7?true`](type/true) | Deprecated |
| **fullscreen** | [`flags.8?true`](type/true) | Requests to open the app in fullscreen mode |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot that owns the mini app |
| **url** | [`flags.3?string`](type/string) | Web app URL, if opening from a keyboard button or inline result |
| **start_param** | [`flags.4?string`](type/string) | Deprecated |
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
| **URL_INVALID** | `400` | Invalid URL provided |

---

## Example

```php
$webViewResult = $client->messages->requestSimpleWebView(
	from_switch_webview : true,
	from_side_menu : true,
	compact : true,
	fullscreen : true,
	bot : $client->inputUserEmpty(),
	url : 'https://docs.liveproto.dev',
	start_param : 'E0reDs9mohqCfWL4',
	theme_params : $client->dataJSON(
		data : 'sabMwql50ZAjXJm3',
	),
	platform : '5Ycvg9M4zFr1pikt',
);
```