# payments.starGiftCollections

**Description** : *Represents a list of star gift collections &raquo;*

**Layer** : 222

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
			collection_id : 7,
			title : 'iCORavoydVcxzwDH',
			icon : $client->documentEmpty(
				id : 6074086380873961413,
			),
			gifts_count : 0,
			hash : 0,
		),
	),
);
```