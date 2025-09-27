# chatThemeUniqueGift

**Layer** : 216

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
		peer_color_available : true,
		id : 7193215929736974827,
		sticker : $client->documentEmpty(
			id : -8524958525064932224,
		),
		stars : 8034171232377997007,
		availability_remains : 57,
		availability_total : 75,
		availability_resale : 2805988666875894728,
		convert_stars : -8723300465321697628,
		first_sale_date : 59,
		last_sale_date : 3,
		upgrade_stars : 6642865086258125236,
		resell_min_stars : 3868984492278361237,
		title : 'DNx5I6eLn38f4aor',
		released_by : $client->peerUser(
			user_id : -6263023625932999318,
		),
		per_user_total : 27,
		per_user_remains : 59,
		locked_until_date : 36,
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 69,
			outbox_accent_color : 51,
			message_colors : array(20),
			wallpaper : $client->wallPaper(
				id : 7465675892202859774,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 2775230995071263790,
				slug : 'lpMtH3aJuDW4jPIv',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
	),
);
```