# webPageAttributeUniqueStarGift

**Layer** : 211

```tl
webPageAttributeUniqueStarGift#cf6f6db8 gift:StarGift = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeUniqueStarGift(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : 9035771592649612098,
		sticker : $client->documentEmpty(
			id : 3691797290472761393,
		),
		stars : 7750291965433656048,
		availability_remains : 98,
		availability_total : 69,
		availability_resale : -3913274144120041518,
		convert_stars : 44107457725812833,
		first_sale_date : 76,
		last_sale_date : 34,
		upgrade_stars : -5032335981114971069,
		resell_min_stars : 4074859252996035335,
		title : '8I0EJfumzylxTZvs',
		released_by : $client->peerUser(
			user_id : -3808253100584366380,
		),
		per_user_total : 26,
		per_user_remains : 62,
	),
);
```