# webPageAttributeUniqueStarGift

**Layer** : 214

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
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : -6774141849518558447,
		sticker : $client->documentEmpty(
			id : 6915400129729249097,
		),
		stars : -1038868588857652931,
		availability_remains : 50,
		availability_total : 94,
		availability_resale : -1485080654144229497,
		convert_stars : 274883911085688969,
		first_sale_date : 52,
		last_sale_date : 18,
		upgrade_stars : 6775184584381214120,
		resell_min_stars : 5645706135274120657,
		title : 'D2bsmnkTpifqKI0e',
		released_by : $client->peerUser(
			user_id : -5426287416125762901,
		),
		per_user_total : 40,
		per_user_remains : 92,
		locked_until_date : 13,
	),
);
```