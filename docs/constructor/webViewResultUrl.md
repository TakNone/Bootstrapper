# webViewResultUrl

**Description** : *Contains the webview URL with appropriate theme and user info parameters added*

**Layer** : 211

```tl
webViewResultUrl#4d22ff98 flags:# fullsize:flags.1?true fullscreen:flags.2?true query_id:flags.0?long url:string = WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **fullsize** | [`flags.1?true`](type/true) | If set, the app must be opened in fullsize mode instead of compact mode |
| **fullscreen** | [`flags.2?true`](type/true) | If set, the app must be opened in fullscreen |
| **query_id** | [`flags.0?long`](type/long) | Webview session ID (only returned by inline button mini apps, menu button mini apps, attachment menu mini apps) |
| <mark>url</mark> | [`string`](type/string) | Webview URL to open |

---

## Type

[WebViewResult](type/WebViewResult)

---

## Example

```php
$webViewResult = $client->webViewResultUrl(
	fullsize : true,
	fullscreen : true,
	query_id : 2723679309222204175,
	url : 'https://docs.liveproto.dev',
);
```