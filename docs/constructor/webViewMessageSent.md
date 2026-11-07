# webViewMessageSent

**Description** : *Info about a sent inline webview message*

**Layer** : 233

```tl
webViewMessageSent#c94511c flags:# msg_id:flags.0?InputBotInlineMessageID = WebViewMessageSent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **msg_id** | [`flags.0?InputBotInlineMessageID`](type/InputBotInlineMessageID) | Message ID |

---

## Type

[WebViewMessageSent](type/WebViewMessageSent)

---

## Example

```php
$webViewMessageSent = $client->webViewMessageSent(
	msg_id : $client->inputBotInlineMessageID(
		dc_id : 79,
		id : 8724168738139777809,
		access_hash : -3413469898773534500,
	),
);
```