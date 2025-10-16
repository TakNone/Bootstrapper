# messageActionSuggestedPostApproval

**Layer** : 216

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
	reject_comment : '8ci25UlgrGhd7f9S',
	schedule_date : 90,
	price : $client->starsAmount(
		amount : 1656303124213226386,
		nanos : 85,
	),
);
```