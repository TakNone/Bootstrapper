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
			collection_id : 11,
			title : 'QdcfY08zjnpZrgDV',
			icon : $client->documentEmpty(
				id : 2211817209029766331,
			),
			gifts_count : 83,
			hash : -877584948897894987,
		),
	),
);
```