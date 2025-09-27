# webPageAttributeUniqueStarGift

**Layer** : 216

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
		peer_color_available : true,
		id : -4710978506465288789,
		sticker : $client->documentEmpty(
			id : -3387445533615728120,
		),
		stars : -2224201201700180111,
		availability_remains : 59,
		availability_total : 85,
		availability_resale : 6406344224944169300,
		convert_stars : -5991568851696215013,
		first_sale_date : 8,
		last_sale_date : 64,
		upgrade_stars : -1289402566869329568,
		resell_min_stars : -8252050511140617032,
		title : 'pABNvu0iX5mQgYF6',
		released_by : $client->peerUser(
			user_id : 1090853428707613533,
		),
		per_user_total : 50,
		per_user_remains : 37,
		locked_until_date : 73,
	),
);
```