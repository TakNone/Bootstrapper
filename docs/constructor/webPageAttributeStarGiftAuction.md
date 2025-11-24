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
		id : 6649489532006458347,
		sticker : $client->documentEmpty(
			id : -6157657597449046955,
		),
		stars : 5393497106715831911,
		availability_remains : 95,
		availability_total : 26,
		availability_resale : 8445256088852989783,
		convert_stars : 3252400953321430458,
		first_sale_date : 83,
		last_sale_date : 39,
		upgrade_stars : -9051984872297899857,
		resell_min_stars : 212051628991932461,
		title : 'Apl1HbC7VBdgITJ2',
		released_by : $client->peerUser(
			user_id : -9060884039871310789,
		),
		per_user_total : 22,
		per_user_remains : 91,
		locked_until_date : 98,
		auction_slug : 'SFkQEs6bRLX0qJha',
		gifts_per_round : 8,
	),
	end_date : 61,
	center_color : 78,
	edge_color : 21,
	text_color : 31,
);
```