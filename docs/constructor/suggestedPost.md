# suggestedPost

**Layer** : 211

```tl
suggestedPost#e8e37e5 flags:# accepted:flags.1?true rejected:flags.2?true price:flags.3?StarsAmount schedule_date:flags.0?int = SuggestedPost;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **accepted** | [`flags.1?true`](type/true) | NOTHING |
| **rejected** | [`flags.2?true`](type/true) | NOTHING |
| **price** | [`flags.3?StarsAmount`](type/StarsAmount) | NOTHING |
| **schedule_date** | [`flags.0?int`](type/int) | NOTHING |

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
		amount : 5268450505965476684,
		nanos : 17,
	),
	schedule_date : 35,
);
```