# webPageAttributeStarGiftAuction

**Layer** : 225

```tl
webPageAttributeStarGiftAuction#1c641c2 gift:StarGift end_date:int = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>end_date</mark> | [`int`](type/int) | NOTHING |

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
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 8225771464515928633,
		sticker : $client->documentEmpty(
			id : 8478795022815935368,
		),
		stars : 337539214312396819,
		availability_remains : 9,
		availability_total : 89,
		availability_resale : 6878644588579710884,
		convert_stars : 7902264459228411982,
		first_sale_date : 81,
		last_sale_date : 20,
		upgrade_stars : 8590401523265720014,
		resell_min_stars : 4447548706308642848,
		title : 'SmEbPzH5RY6JpvNn',
		released_by : $client->peerUser(
			user_id : 6722734779475148064,
		),
		per_user_total : 82,
		per_user_remains : 14,
		locked_until_date : 92,
		auction_slug : '5yHvlNKo4O8UAsFp',
		gifts_per_round : 48,
		auction_start_date : 53,
		upgrade_variants : 47,
		background : $client->starGiftBackground(
			center_color : 27,
			edge_color : 25,
			text_color : 28,
		),
	),
	end_date : 62,
);
```