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
		id : -2767502548032000762,
		sticker : $client->documentEmpty(
			id : -9129705392702346059,
		),
		stars : -3764265258099361645,
		availability_remains : 74,
		availability_total : 20,
		availability_resale : 1528628151397331061,
		convert_stars : -4839559908632200161,
		first_sale_date : 73,
		last_sale_date : 51,
		upgrade_stars : -1741597628422551730,
		resell_min_stars : 7838513459255767859,
		title : 'U68AwGeEr7tqThjM',
		released_by : $client->peerUser(
			user_id : -7203615311794614528,
		),
		per_user_total : 12,
		per_user_remains : 17,
		locked_until_date : 88,
		auction_slug : 'VqrJheWHdMZ6ICtG',
		gifts_per_round : 81,
		auction_start_date : 52,
		upgrade_variants : 94,
		background : $client->starGiftBackground(
			center_color : 78,
			edge_color : 58,
			text_color : 19,
		),
	),
);
```