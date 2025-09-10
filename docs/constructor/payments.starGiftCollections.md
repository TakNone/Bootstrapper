# payments.starGiftCollections

**Layer** : 214

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
			collection_id : 74,
			title : 'JP0pV126onkFSxQY',
			icon : $client->documentEmpty(
				id : 2368342222807071138,
			),
			gifts_count : 26,
			hash : 0,
		),
	),
);
```