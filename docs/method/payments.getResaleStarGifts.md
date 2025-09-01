# payments.getResaleStarGifts

**Layer** : 214

```tl
payments.getResaleStarGifts#7a5fa236 flags:# sort_by_price:flags.1?true sort_by_num:flags.2?true attributes_hash:flags.0?long gift_id:long attributes:flags.3?Vector<StarGiftAttributeId> offset:string limit:int = payments.ResaleStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **sort_by_price** | [`flags.1?true`](type/true) | NOTHING |
| **sort_by_num** | [`flags.2?true`](type/true) | NOTHING |
| **attributes_hash** | [`flags.0?long`](type/long) | NOTHING |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |
| **attributes** | [`flags.3?Vector<StarGiftAttributeId>`](type/StarGiftAttributeId) | NOTHING |
| <mark>offset</mark> | [`string`](type/string) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[payments.ResaleStarGifts](type/payments.ResaleStarGifts)

---

## Example

```php
$paymentsResaleStarGifts = $client->payments->getResaleStarGifts(
	sort_by_price : true,
	sort_by_num : true,
	attributes_hash : -8469344750595474569,
	gift_id : -9079918895025399439,
	attributes : array(
		$client->starGiftAttributeIdModel(
			document_id : -728511935994767860,
		),
		$client->starGiftAttributeIdPattern(
			document_id : -8159446963172543110,
		),
		$client->starGiftAttributeIdBackdrop(
			backdrop_id : 53,
		),
	),
	offset : 'KU3I5PwX82a6nCrW',
	limit : 65,
);
```