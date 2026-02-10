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
		id : -5265314892046505765,
		sticker : $client->documentEmpty(
			id : -2484560600268461564,
		),
		stars : 618848653206216204,
		availability_remains : 85,
		availability_total : 58,
		availability_resale : 8847216735258289496,
		convert_stars : 3677301504735616888,
		first_sale_date : 41,
		last_sale_date : 42,
		upgrade_stars : -8092776209873892237,
		resell_min_stars : 2944641416939270547,
		title : 'LcmPpAr7NlvbKnEz',
		released_by : $client->peerUser(
			user_id : 7767784785743736102,
		),
		per_user_total : 23,
		per_user_remains : 10,
		locked_until_date : 40,
		auction_slug : 'lcjrXvG3HhqTOAVS',
		gifts_per_round : 51,
		auction_start_date : 88,
		upgrade_variants : 34,
		background : $client->starGiftBackground(
			center_color : 60,
			edge_color : 10,
			text_color : 15,
		),
	),
	end_date : 8,
);
```