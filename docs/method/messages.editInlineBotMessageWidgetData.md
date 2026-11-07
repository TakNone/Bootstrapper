# messages.editInlineBotMessageWidgetData

**Layer** : 233

```tl
messages.editInlineBotMessageWidgetData#6396ce2b flags:# id:InputBotInlineMessageID public_data:flags.0?string chat_data:flags.1?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>id</mark> | [`InputBotInlineMessageID`](type/InputBotInlineMessageID) | NOTHING |
| **public_data** | [`flags.0?string`](type/string) | NOTHING |
| **chat_data** | [`flags.1?string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->editInlineBotMessageWidgetData(
	id : $client->inputBotInlineMessageID(
		dc_id : 50,
		id : -2318396628889636159,
		access_hash : -5287587196440173940,
	),
	public_data : '2dR6xlwySUDPojaT',
	chat_data : 'OFVWGCPQHRUdA9KX',
);
```