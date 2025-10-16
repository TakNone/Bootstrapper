# payments.starGiftCollections

**Layer** : 216

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
			collection_id : 16,
			title : 'RcknZa6fMetl0gJj',
			icon : $client->documentEmpty(
				id : 58355605594218838,
			),
			gifts_count : 97,
			hash : 0,
		),
	),
);
```