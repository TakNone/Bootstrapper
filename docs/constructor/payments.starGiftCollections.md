# payments.starGiftCollections

**Description** : *Represents a list of star gift collections &raquo;*

**Layer** : 225

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
			collection_id : 10,
			title : 'YWIMrJE8T1cSyUCt',
			icon : $client->documentEmpty(
				id : 3862045233409658818,
			),
			gifts_count : 74,
			hash : 0,
		),
	),
);
```