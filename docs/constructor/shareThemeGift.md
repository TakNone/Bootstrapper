# shareThemeGift

**Layer** : 233

```tl
shareThemeGift#ebece66d stargift:StarGift = ShareTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`StarGift`](type/StarGift) | NOTHING |

---

## Type

[ShareTheme](type/ShareTheme)

---

## Example

```php
$shareTheme = $client->shareThemeGift(
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 2448178646836877697,
		sticker : $client->documentEmpty(
			id : 8913944161576858587,
		),
		stars : 9034089426341580254,
		availability_remains : 68,
		availability_total : 21,
		availability_resale : 3431719883539493371,
		convert_stars : 4541246152950530713,
		first_sale_date : 2,
		last_sale_date : 41,
		upgrade_stars : -4166211109653980157,
		resell_min_stars : -4595906953540129123,
		title : 'IxHOknyJq0CDegLi',
		released_by : $client->peerUser(
			user_id : -2412400510211830599,
		),
		per_user_total : 64,
		per_user_remains : 73,
		locked_until_date : 36,
		auction_slug : 'pjtV4ueEhwAXsmCR',
		gifts_per_round : 77,
		auction_start_date : 72,
		upgrade_variants : 66,
		background : $client->starGiftBackground(
			center_color : 59,
			edge_color : 49,
			text_color : 39,
		),
	),
);
```