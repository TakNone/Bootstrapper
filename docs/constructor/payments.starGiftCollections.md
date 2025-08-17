# payments.starGiftCollections

**Layer** : 211

```tl
payments.starGiftCollections#8a2932f3 collections:Vector<StarGiftCollection> = payments.StarGiftCollections;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>collections</mark> | [`Vector<StarGiftCollection>`](type/StarGiftCollection) | NOTHING |

---

## Type

[payments.StarGiftCollections](type/payments.StarGiftCollections)

---

## Example

```php
$paymentsStarGiftCollections = $client->payments->starGiftCollections(
	collections : array(
		$client->starGiftCollection(
			collection_id : 60,
			title : 'FklMv3D7o02zBPad',
			icon : $client->documentEmpty(
				id : -1209366288537643095,
			),
			gifts_count : 70,
			hash : 592236833275132750,
		),
	),
);
```