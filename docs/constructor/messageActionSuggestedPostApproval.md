# messageActionSuggestedPostApproval

**Layer** : 214

```tl
messageActionSuggestedPostApproval#ee7a1596 flags:# rejected:flags.0?true balance_too_low:flags.1?true reject_comment:flags.2?string schedule_date:flags.3?int price:flags.4?StarsAmount = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **rejected** | [`flags.0?true`](type/true) | NOTHING |
| **balance_too_low** | [`flags.1?true`](type/true) | NOTHING |
| **reject_comment** | [`flags.2?string`](type/string) | NOTHING |
| **schedule_date** | [`flags.3?int`](type/int) | NOTHING |
| **price** | [`flags.4?StarsAmount`](type/StarsAmount) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestedPostApproval(
	rejected : true,
	balance_too_low : true,
	reject_comment : '3WCIM5PZfeBtmvFA',
	schedule_date : 2,
	price : $client->starsAmount(
		amount : 5938512974765535844,
		nanos : 29,
	),
);
```