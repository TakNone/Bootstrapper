# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 229

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
		id : -5441891100226119010,
		sticker : $client->documentEmpty(
			id : 3590730665653593601,
		),
		stars : 2699309598694726035,
		availability_remains : 53,
		availability_total : 77,
		availability_resale : 5520581032707967127,
		convert_stars : -7043285019820913884,
		first_sale_date : 58,
		last_sale_date : 72,
		upgrade_stars : -1963883318056412280,
		resell_min_stars : -6707659928800665732,
		title : 'Iai7tP2FnTLK3kpG',
		released_by : $client->peerUser(
			user_id : -8228562402761937056,
		),
		per_user_total : 7,
		per_user_remains : 63,
		locked_until_date : 93,
		auction_slug : 'zf3Ra7BKWpGVSoIn',
		gifts_per_round : 67,
		auction_start_date : 19,
		upgrade_variants : 67,
		background : $client->starGiftBackground(
			center_color : 69,
			edge_color : 53,
			text_color : 15,
		),
	),
);
```