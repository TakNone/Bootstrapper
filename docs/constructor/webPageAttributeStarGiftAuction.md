# webPageAttributeStarGiftAuction

**Layer** : 227

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
		id : 3389779269137984664,
		sticker : $client->documentEmpty(
			id : -808407935041438336,
		),
		stars : 3984074368045654674,
		availability_remains : 47,
		availability_total : 26,
		availability_resale : 7614950810949048292,
		convert_stars : -5343938764545894950,
		first_sale_date : 19,
		last_sale_date : 26,
		upgrade_stars : 2738963566975051024,
		resell_min_stars : 7185476488938050703,
		title : '14rJ6WYQAlLDPjTc',
		released_by : $client->peerUser(
			user_id : 1008291149258567604,
		),
		per_user_total : 90,
		per_user_remains : 20,
		locked_until_date : 89,
		auction_slug : 'TsXYfu3ilgyRkwW6',
		gifts_per_round : 39,
		auction_start_date : 35,
		upgrade_variants : 4,
		background : $client->starGiftBackground(
			center_color : 84,
			edge_color : 63,
			text_color : 47,
		),
	),
	end_date : 99,
);
```