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
		id : -4395527041914207441,
		sticker : $client->documentEmpty(
			id : 8199559189400798278,
		),
		stars : -3001847184787432030,
		availability_remains : 46,
		availability_total : 55,
		availability_resale : -5764315386479616976,
		convert_stars : 4441370585119749394,
		first_sale_date : 31,
		last_sale_date : 75,
		upgrade_stars : 7565268769953229421,
		resell_min_stars : 8973524099596535557,
		title : 'bV2yQKTRPsEWJlXD',
		released_by : $client->peerUser(
			user_id : 2428748731047474781,
		),
		per_user_total : 51,
		per_user_remains : 56,
		locked_until_date : 44,
	),
);
```