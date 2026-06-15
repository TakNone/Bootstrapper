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
			collection_id : 71,
			title : 'U5aSFZDleA89Ozgh',
			icon : $client->documentEmpty(
				id : 3582060151980452356,
			),
			gifts_count : 1,
			hash : 0,
		),
	),
);
```