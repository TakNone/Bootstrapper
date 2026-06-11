# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 227

```tl
webPageAttributeUniqueStarGift#cf6f6db8 gift:StarGift = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The starGiftUnique constructor |

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
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 1301856659633883084,
		sticker : $client->documentEmpty(
			id : 4044324023651687118,
		),
		stars : -4031301856778867456,
		availability_remains : 18,
		availability_total : 51,
		availability_resale : 5081398778088288522,
		convert_stars : -3828245512172838703,
		first_sale_date : 70,
		last_sale_date : 74,
		upgrade_stars : -7666873096093117056,
		resell_min_stars : -2131951293651369640,
		title : 'tB0lx5fe9nNILcwX',
		released_by : $client->peerUser(
			user_id : -4439366389544553073,
		),
		per_user_total : 8,
		per_user_remains : 44,
		locked_until_date : 5,
		auction_slug : 'eYl4893oAC2UujpJ',
		gifts_per_round : 93,
		auction_start_date : 54,
		upgrade_variants : 2,
		background : $client->starGiftBackground(
			center_color : 65,
			edge_color : 48,
			text_color : 29,
		),
	),
);
```