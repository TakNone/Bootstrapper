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
		id : 3864959427123988038,
		sticker : $client->documentEmpty(
			id : 4472852134734208392,
		),
		stars : -746226722577688428,
		availability_remains : 38,
		availability_total : 53,
		availability_resale : -74655550733251741,
		convert_stars : 3274360545263854854,
		first_sale_date : 80,
		last_sale_date : 56,
		upgrade_stars : 3769868451905122984,
		resell_min_stars : -6856632753678785861,
		title : 'P9eEW7DLkrYhzGI8',
		released_by : $client->peerUser(
			user_id : -5794509796168463767,
		),
		per_user_total : 59,
		per_user_remains : 44,
		locked_until_date : 94,
		auction_slug : 'FZLPxfkM3b0I2S14',
		gifts_per_round : 46,
	),
);
```