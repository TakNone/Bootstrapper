# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 216

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
		id : -6982323237645094221,
		sticker : $client->documentEmpty(
			id : -5431957667541152615,
		),
		stars : 3038718522805796699,
		availability_remains : 49,
		availability_total : 30,
		availability_resale : -7794455386259019106,
		convert_stars : -2599454977667053154,
		first_sale_date : 17,
		last_sale_date : 94,
		upgrade_stars : -469836774716558688,
		resell_min_stars : -7897814358366855848,
		title : 'pxmlb3HyoXJSLYRe',
		released_by : $client->peerUser(
			user_id : -7598859912947160866,
		),
		per_user_total : 55,
		per_user_remains : 7,
		locked_until_date : 66,
	),
);
```