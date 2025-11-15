# webPageAttributeStarGiftAuction

**Layer** : 218

```tl
webPageAttributeStarGiftAuction#34986ab gift:StarGift end_date:int center_color:int edge_color:int text_color:int = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>end_date</mark> | [`int`](type/int) | NOTHING |
| <mark>center_color</mark> | [`int`](type/int) | NOTHING |
| <mark>edge_color</mark> | [`int`](type/int) | NOTHING |
| <mark>text_color</mark> | [`int`](type/int) | NOTHING |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftAuction(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -4878842226128614504,
		sticker : $client->documentEmpty(
			id : 1418083249014504770,
		),
		stars : -1648642837540609926,
		availability_remains : 3,
		availability_total : 77,
		availability_resale : -1511768269904650715,
		convert_stars : 3890349603072931444,
		first_sale_date : 100,
		last_sale_date : 78,
		upgrade_stars : -2414758155833100051,
		resell_min_stars : -1429548027076815282,
		title : 'XRZJ4Gz67cr9tFsT',
		released_by : $client->peerUser(
			user_id : 2485932040722339994,
		),
		per_user_total : 25,
		per_user_remains : 17,
		locked_until_date : 41,
		auction_slug : '3YgeVx2qdZsRcbMP',
		gifts_per_round : 44,
	),
	end_date : 91,
	center_color : 37,
	edge_color : 94,
	text_color : 73,
);
```