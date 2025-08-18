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
		id : 9142774042560036728,
		sticker : $client->documentEmpty(
			id : -4384478355477014102,
		),
		stars : 2152827211273955319,
		availability_remains : 50,
		availability_total : 57,
		availability_resale : -3835569000044934714,
		convert_stars : 3537806148138376588,
		first_sale_date : 93,
		last_sale_date : 33,
		upgrade_stars : -3042214643145427269,
		resell_min_stars : 2094932073818984270,
		title : 'o3PGBr4Z1IhJgvSC',
		released_by : $client->peerUser(
			user_id : -2893353927946663427,
		),
		per_user_total : 53,
		per_user_remains : 76,
	),
);
```