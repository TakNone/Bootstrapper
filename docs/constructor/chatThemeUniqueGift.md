# chatThemeUniqueGift

**Layer** : 214

```tl
chatThemeUniqueGift#3458f9c8 gift:StarGift theme_settings:Vector<ThemeSettings> = ChatTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>theme_settings</mark> | [`Vector<ThemeSettings>`](type/ThemeSettings) | NOTHING |

---

## Type

[ChatTheme](type/ChatTheme)

---

## Example

```php
$chatTheme = $client->chatThemeUniqueGift(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : -642552155131955040,
		sticker : $client->documentEmpty(
			id : -5044296846328905786,
		),
		stars : 1174805419378667956,
		availability_remains : 57,
		availability_total : 68,
		availability_resale : -1002486438596339974,
		convert_stars : -1461446847393715402,
		first_sale_date : 8,
		last_sale_date : 75,
		upgrade_stars : 3526100587100557560,
		resell_min_stars : -8852185329921385117,
		title : 'xOg6kGs4tiKCfvuI',
		released_by : $client->peerUser(
			user_id : -8175357397507644253,
		),
		per_user_total : 79,
		per_user_remains : 14,
		locked_until_date : 8,
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 14,
			outbox_accent_color : 73,
			message_colors : array(63),
			wallpaper : $client->wallPaper(
				id : 7610449867479925046,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -1601264989190347930,
				slug : 'RGsEQAMPr74LcNqh',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
	),
);
```