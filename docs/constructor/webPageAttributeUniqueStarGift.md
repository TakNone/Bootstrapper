# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 218

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
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -3807633487969469926,
		sticker : $client->documentEmpty(
			id : -6047971901153760837,
		),
		stars : -6516956500559029328,
		availability_remains : 46,
		availability_total : 88,
		availability_resale : 220729190454434865,
		convert_stars : 8092156420895382601,
		first_sale_date : 78,
		last_sale_date : 50,
		upgrade_stars : -4884884830567938954,
		resell_min_stars : -7663623069902785970,
		title : 'a1STlydMrgV6WKsB',
		released_by : $client->peerUser(
			user_id : 9221163920716659823,
		),
		per_user_total : 56,
		per_user_remains : 30,
		locked_until_date : 85,
		auction_slug : 'gnfTVBdKyUNX70Dl',
		gifts_per_round : 93,
	),
);
```