# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 233

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
		id : 651322479341582837,
		sticker : $client->documentEmpty(
			id : -2502823949287315410,
		),
		stars : 5501198628934760583,
		availability_remains : 42,
		availability_total : 62,
		availability_resale : 3431482150565023242,
		convert_stars : 413662271441432960,
		first_sale_date : 55,
		last_sale_date : 62,
		upgrade_stars : 2466014046943872171,
		resell_min_stars : 6205192936655612985,
		title : 'TtrdOuzfUj2XpxZy',
		released_by : $client->peerUser(
			user_id : 547544887040798348,
		),
		per_user_total : 12,
		per_user_remains : 14,
		locked_until_date : 62,
		auction_slug : 'xTshLZP6v8SfgdnJ',
		gifts_per_round : 9,
		auction_start_date : 2,
		upgrade_variants : 83,
		background : $client->starGiftBackground(
			center_color : 36,
			edge_color : 73,
			text_color : 56,
		),
	),
);
```