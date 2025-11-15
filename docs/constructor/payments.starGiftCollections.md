# payments.starGiftCollections

**Description** : *Represents a list of star gift collections &raquo;*

**Layer** : 218

```tl
payments.starGiftCollections#8a2932f3 collections:Vector<StarGiftCollection> = payments.StarGiftCollections;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>collections</mark> | [`Vector<StarGiftCollection>`](type/StarGiftCollection) | Star gift collections |

---

## Type

[payments.StarGiftCollections](type/payments.StarGiftCollections)

---

## Example

```php
$paymentsStarGiftCollections = $client->payments->starGiftCollections(
	collections : array(
		$client->starGiftCollection(
			collection_id : 86,
			title : 'WlFGwIusM8YJNyRm',
			icon : $client->documentEmpty(
				id : 4269776344493013887,
			),
			gifts_count : 65,
			hash : 0,
		),
	),
);
```