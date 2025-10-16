# payments.starGiftCollections

**Description** : *Represents a list of star gift collections &raquo;*

**Layer** : 216

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
			collection_id : 96,
			title : 'jFSGsnMLRd6IWmUk',
			icon : $client->documentEmpty(
				id : 7929228329587583548,
			),
			gifts_count : 87,
			hash : 0,
		),
	),
);
```