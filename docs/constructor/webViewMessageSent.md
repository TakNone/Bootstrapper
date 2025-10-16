# webViewMessageSent

**Description** : *Info about a sent inline webview message*

**Layer** : 216

```tl
webViewMessageSent#c94511c flags:# msg_id:flags.0?InputBotInlineMessageID = WebViewMessageSent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **msg_id** | [`flags.0?InputBotInlineMessageID`](type/InputBotInlineMessageID) | Message ID |

---

## Type

[WebViewMessageSent](type/WebViewMessageSent)

---

## Example

```php
$webViewMessageSent = $client->webViewMessageSent(
	msg_id : $client->inputBotInlineMessageID(
		dc_id : 2,
		id : -1418157666569864738,
		access_hash : 550553834496014188,
	),
);
```