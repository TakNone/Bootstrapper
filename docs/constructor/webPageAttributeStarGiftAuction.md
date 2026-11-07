# webPageAttributeStarGiftAuction

**Description** : *Contains info about a collectible gift auction &raquo; for a webPage preview of an auction &raquo; \(the webPage will have a type of telegram\_auction\)*

**Layer** : 233

```tl
webPageAttributeStarGiftAuction#1c641c2 gift:StarGift end_date:int = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The gift linked to the auction |
| <mark>end_date</mark> | [`int`](type/int) | Date when the auction will end (UNIX timestamp) |

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
		id : 5408851638759616946,
		sticker : $client->documentEmpty(
			id : -6717287586796647594,
		),
		stars : 2340001093908626175,
		availability_remains : 64,
		availability_total : 84,
		availability_resale : -4793588112151606237,
		convert_stars : 8674709409523408563,
		first_sale_date : 53,
		last_sale_date : 23,
		upgrade_stars : -8451808036766554034,
		resell_min_stars : 721705347942537882,
		title : 'psxDYmPJ8ZIrXeKC',
		released_by : $client->peerUser(
			user_id : -493992232471894828,
		),
		per_user_total : 47,
		per_user_remains : 55,
		locked_until_date : 30,
		auction_slug : 'uMhVOw6E1BeHZFfp',
		gifts_per_round : 27,
		auction_start_date : 28,
		upgrade_variants : 36,
		background : $client->starGiftBackground(
			center_color : 88,
			edge_color : 46,
			text_color : 52,
		),
	),
	end_date : 10,
);
```