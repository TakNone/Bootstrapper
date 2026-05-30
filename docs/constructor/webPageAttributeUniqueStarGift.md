# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 225

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
		id : 742211314080573319,
		sticker : $client->documentEmpty(
			id : 248463610216545925,
		),
		stars : 2954829465653655705,
		availability_remains : 57,
		availability_total : 96,
		availability_resale : 7208618046439905315,
		convert_stars : 4318937595236641822,
		first_sale_date : 88,
		last_sale_date : 99,
		upgrade_stars : 5464879412849548957,
		resell_min_stars : -3121170068652750450,
		title : 'Cwca5mudjO6Vf7iR',
		released_by : $client->peerUser(
			user_id : -9011864999615901541,
		),
		per_user_total : 84,
		per_user_remains : 11,
		locked_until_date : 74,
		auction_slug : '6nREgecbiXaDOjqL',
		gifts_per_round : 14,
		auction_start_date : 85,
		upgrade_variants : 9,
		background : $client->starGiftBackground(
			center_color : 83,
			edge_color : 98,
			text_color : 8,
		),
	),
);
```