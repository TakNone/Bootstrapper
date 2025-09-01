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
		id : -4728560748311570774,
		sticker : $client->documentEmpty(
			id : -1612757288481855587,
		),
		stars : -2279825103200799253,
		availability_remains : 19,
		availability_total : 90,
		availability_resale : 8870031331013677002,
		convert_stars : -7537909682520202016,
		first_sale_date : 74,
		last_sale_date : 87,
		upgrade_stars : 4843019796596787632,
		resell_min_stars : -4169133181527679151,
		title : 'j7FW9c2SRodkAMz5',
		released_by : $client->peerUser(
			user_id : -2187068297939916405,
		),
		per_user_total : 71,
		per_user_remains : 57,
		locked_until_date : 59,
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 6,
			outbox_accent_color : 90,
			message_colors : array(8),
			wallpaper : $client->wallPaper(
				id : -4689014529448898322,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 1800876222487053317,
				slug : 'MyW5EGnd3J6OUejR',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
	),
);
```