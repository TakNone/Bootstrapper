# payments.starGiftCollections

**Description** : *Represents a list of star gift collections &raquo;*

**Layer** : 227

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
			collection_id : 92,
			title : 'W9iUZQ8VBhaslwYy',
			icon : $client->documentEmpty(
				id : -5402824737130457261,
			),
			gifts_count : 35,
			hash : 0,
		),
	),
);
```