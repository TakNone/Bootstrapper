# messages.setBotShippingResults

**Description** : *If you sent an invoice requesting a shipping address and the parameter is\_flexible was specified, the bot will receive an updateBotShippingQuery update\. Use this method to reply to shipping queries*

**Layer** : 218

```tl
messages.setBotShippingResults#e5f672fa flags:# query_id:long error:flags.0?string shipping_options:flags.1?Vector<ShippingOption> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>query_id</mark> | [`long`](type/long) | Unique identifier for the query to be answered |
| **error** | [`flags.0?string`](type/string) | Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable"). Telegram will display this message to the user |
| **shipping_options** | [`flags.1?Vector<ShippingOption>`](type/ShippingOption) | A vector of available shipping options |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->messages->setBotShippingResults(
	query_id : -5746152409128449419,
	error : 'bARvhfIxjm47zuQl',
	shipping_options : array(
		$client->shippingOption(
			id : 'fAmwRya1qZ4McJIF',
			title : 'NjwkKx4Wt01cFJYQ',
			prices : array(
				$client->labeledPrice(
					label : 'nCzoVHwQbdrL29lN',
					amount : 8840717511799116181,
				),
			),
		),
	),
);
```