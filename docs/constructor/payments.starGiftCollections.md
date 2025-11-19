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
			collection_id : 95,
			title : 'Swvug7pI2RoqQLEH',
			icon : $client->documentEmpty(
				id : 1753504462293185796,
			),
			gifts_count : 92,
			hash : 0,
		),
	),
);
```