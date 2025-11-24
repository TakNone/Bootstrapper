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
		id : 4659662685430534194,
		sticker : $client->documentEmpty(
			id : 3549707742993571693,
		),
		stars : -5563130919681351604,
		availability_remains : 28,
		availability_total : 19,
		availability_resale : 3801396558704178913,
		convert_stars : -5908326357986048836,
		first_sale_date : 34,
		last_sale_date : 68,
		upgrade_stars : -8325677690570340805,
		resell_min_stars : 3023357423667465409,
		title : 'GHouID0xLRs6lYiP',
		released_by : $client->peerUser(
			user_id : -8051806468557572365,
		),
		per_user_total : 28,
		per_user_remains : 93,
		locked_until_date : 1,
		auction_slug : 'mzxn5YG2u473odlI',
		gifts_per_round : 91,
	),
	end_date : 88,
	center_color : 82,
	edge_color : 20,
	text_color : 16,
);
```