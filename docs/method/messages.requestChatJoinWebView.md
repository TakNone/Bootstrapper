# messages.requestChatJoinWebView

**Layer** : 229

```tl
messages.requestChatJoinWebView#ba9ee679 flags:# query_id:long theme_params:flags.0?DataJSON platform:string = WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| **theme_params** | [`flags.0?DataJSON`](type/DataJSON) | NOTHING |
| <mark>platform</mark> | [`string`](type/string) | NOTHING |

---

## Result

[WebViewResult](type/WebViewResult)

---

## Example

```php
$webViewResult = $client->messages->requestChatJoinWebView(
	query_id : 2612058638061220757,
	theme_params : $client->dataJSON(
		data : 'nOv63Pd1XS84D7HJ',
	),
	platform : 'fQet1i6TRp2LFrBP',
);
```