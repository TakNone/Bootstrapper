# chatThemeUniqueGift

**Description** : *A chat theme based on a collectible gift &raquo;*

**Layer** : 216

```tl
chatThemeUniqueGift#3458f9c8 gift:StarGift theme_settings:Vector<ThemeSettings> = ChatTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The owned collectible gift on which this theme is based, as a starGiftUnique constructor |
| <mark>theme_settings</mark> | [`Vector<ThemeSettings>`](type/ThemeSettings) | Theme settings |

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
		id : -3656512494727813722,
		sticker : $client->documentEmpty(
			id : -2270321889047347076,
		),
		stars : 8179005237977692577,
		availability_remains : 50,
		availability_total : 81,
		availability_resale : 6535323298303587482,
		convert_stars : 1304457414515240887,
		first_sale_date : 62,
		last_sale_date : 85,
		upgrade_stars : -3145411748198036355,
		resell_min_stars : -2543987472828938408,
		title : 'C2nVeEgMFl5zhYPv',
		released_by : $client->peerUser(
			user_id : 5089619277886667884,
		),
		per_user_total : 41,
		per_user_remains : 80,
		locked_until_date : 58,
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 35,
			outbox_accent_color : 10,
			message_colors : array(77),
			wallpaper : $client->wallPaper(
				id : 1507564723023107299,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5971521192333929694,
				slug : 'HZO1DFErhlV0Bae9',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
	),
);
```