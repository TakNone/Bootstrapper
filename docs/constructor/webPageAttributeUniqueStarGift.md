# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 222

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
		id : -3214044409886535387,
		sticker : $client->documentEmpty(
			id : 5338679416553368176,
		),
		stars : 1708292525000270732,
		availability_remains : 52,
		availability_total : 63,
		availability_resale : -6512261373523710053,
		convert_stars : -2373528844730068599,
		first_sale_date : 90,
		last_sale_date : 53,
		upgrade_stars : 8914214655368741039,
		resell_min_stars : 7379798612489744012,
		title : 'zBEY51g0ldFtKeJ3',
		released_by : $client->peerUser(
			user_id : -1773641310269866344,
		),
		per_user_total : 26,
		per_user_remains : 77,
		locked_until_date : 40,
		auction_slug : 'OXmfc4QUhrSswoA1',
		gifts_per_round : 37,
		auction_start_date : 48,
		upgrade_variants : 16,
		background : $client->starGiftBackground(
			center_color : 77,
			edge_color : 42,
			text_color : 92,
		),
	),
);
```