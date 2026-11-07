# messageActionSuggestedPostApproval

**Description** : *A suggested post &raquo; was approved or rejected*

**Layer** : 233

```tl
messageActionSuggestedPostApproval#ee7a1596 flags:# rejected:flags.0?true balance_too_low:flags.1?true reject_comment:flags.2?string schedule_date:flags.3?int price:flags.4?StarsAmount = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **rejected** | [`flags.0?true`](type/true) | Whether the suggested post was rejected |
| **balance_too_low** | [`flags.1?true`](type/true) | If set, the post was approved but the user's balance is too low to pay for the suggested post |
| **reject_comment** | [`flags.2?string`](type/string) | If the suggested post was rejected, can optionally contain a rejection comment |
| **schedule_date** | [`flags.3?int`](type/int) | Scheduling date |
| **price** | [`flags.4?StarsAmount`](type/StarsAmount) | Price for the suggested post |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestedPostApproval(
	rejected : true,
	balance_too_low : true,
	reject_comment : 'UFSk9ITEJpAQDis8',
	schedule_date : 65,
	price : $client->starsAmount(
		amount : 72183847976852601,
		nanos : 87,
	),
);
```