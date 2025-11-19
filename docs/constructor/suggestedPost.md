# suggestedPost

**Description** : *Contains info about a suggested post &raquo;*

**Layer** : 218

```tl
suggestedPost#e8e37e5 flags:# accepted:flags.1?true rejected:flags.2?true price:flags.3?StarsAmount schedule_date:flags.0?int = SuggestedPost;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **accepted** | [`flags.1?true`](type/true) | Whether the suggested post was accepted |
| **rejected** | [`flags.2?true`](type/true) | Whether the suggested post was rejected |
| **price** | [`flags.3?StarsAmount`](type/StarsAmount) | Price of the suggested post |
| **schedule_date** | [`flags.0?int`](type/int) | Scheduling date |

---

## Type

[SuggestedPost](type/SuggestedPost)

---

## Example

```php
$suggestedPost = $client->suggestedPost(
	accepted : true,
	rejected : true,
	price : $client->starsAmount(
		amount : -7199771427906232038,
		nanos : 17,
	),
	schedule_date : 34,
);
```