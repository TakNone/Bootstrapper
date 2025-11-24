# webViewMessageSent

**Description** : *Info about a sent inline webview message*

**Layer** : 218

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
		dc_id : 99,
		id : 7333079283847424035,
		access_hash : 5253536480839713353,
	),
);
```