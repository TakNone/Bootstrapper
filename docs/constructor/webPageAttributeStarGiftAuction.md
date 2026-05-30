# webPageAttributeStarGiftAuction

**Layer** : 222

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
		id : -5481008453520275275,
		sticker : $client->documentEmpty(
			id : -731955806824596336,
		),
		stars : -6180777178483524610,
		availability_remains : 97,
		availability_total : 72,
		availability_resale : -4731526635323739514,
		convert_stars : -962389465506430737,
		first_sale_date : 48,
		last_sale_date : 2,
		upgrade_stars : -8023402763389535450,
		resell_min_stars : -1782033211930183189,
		title : 'Kbe25xFwOlWNotca',
		released_by : $client->peerUser(
			user_id : -6831475135005518655,
		),
		per_user_total : 82,
		per_user_remains : 34,
		locked_until_date : 72,
		auction_slug : 'Tq4JaVXNj2IH5FfD',
		gifts_per_round : 68,
		auction_start_date : 18,
		upgrade_variants : 13,
		background : $client->starGiftBackground(
			center_color : 61,
			edge_color : 16,
			text_color : 51,
		),
	),
	end_date : 15,
);
```