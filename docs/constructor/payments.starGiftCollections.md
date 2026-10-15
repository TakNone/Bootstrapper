# payments.starGiftCollections

**Description** : *Represents a list of star gift collections &raquo;*

**Layer** : 229

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
			collection_id : 37,
			title : 'jXlN2emu61crOSZD',
			icon : $client->documentEmpty(
				id : 5456129377658109549,
			),
			gifts_count : 27,
			hash : 0,
		),
	),
);
```