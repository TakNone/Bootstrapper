# payments.getResaleStarGifts

**Description** : *Get collectible gifts of a specific type currently on resale, see here &raquo; for more info*

**Layer** : 218

```tl
payments.getResaleStarGifts#7a5fa236 flags:# sort_by_price:flags.1?true sort_by_num:flags.2?true attributes_hash:flags.0?long gift_id:long attributes:flags.3?Vector<StarGiftAttributeId> offset:string limit:int = payments.ResaleStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **sort_by_price** | [`flags.1?true`](type/true) | Sort gifts by price (ascending) |
| **sort_by_num** | [`flags.2?true`](type/true) | Sort gifts by number (ascending) |
| **attributes_hash** | [`flags.0?long`](type/long) | If a previous call to the method was made and payments.resaleStarGifts.attributes_hash was set, pass it here to avoid returning any results if they haven't changed. Otherwise, set this flag and pass 0 to return payments.resaleStarGifts.attributes_hash and payments.resaleStarGifts.attributes, these two fields will not be set if this flag is not set |
| <mark>gift_id</mark> | [`long`](type/long) | Mandatory identifier of the base gift from which the collectible gift was upgraded |
| **attributes** | [`flags.3?Vector<StarGiftAttributeId>`](type/StarGiftAttributeId) | Optionally filter gifts with the specified attributes. If no attributes of a specific type are specified, all attributes of that type are allowed |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination. If not equal to an empty string, payments.resaleStarGifts.counters will not be set to avoid returning the counters every time a new page is fetched |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[payments.ResaleStarGifts](type/payments.ResaleStarGifts)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |

---

## Example

```php
$paymentsResaleStarGifts = $client->payments->getResaleStarGifts(
	sort_by_price : true,
	sort_by_num : true,
	attributes_hash : -7584941777914417940,
	gift_id : -4983909729438333959,
	attributes : array(
		$client->starGiftAttributeIdModel(
			document_id : 4459512519130463548,
		),
		$client->starGiftAttributeIdPattern(
			document_id : -2345279721587637230,
		),
		$client->starGiftAttributeIdBackdrop(
			backdrop_id : 5,
		),
	),
	offset : '98S35cVHRunogApW',
	limit : 70,
);
```