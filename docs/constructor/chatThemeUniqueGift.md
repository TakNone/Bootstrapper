# chatThemeUniqueGift

**Description** : *A chat theme based on a collectible gift &raquo;*

**Layer** : 229

```tl
chatThemeUniqueGift#3458f9c8 gift:StarGift theme_settings:Vector<ThemeSettings> = ChatTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The owned or hosted collectible gift » on which this theme is based, as a starGiftUnique constructor |
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
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 5965887815041803690,
		sticker : $client->documentEmpty(
			id : 4699069957260522264,
		),
		stars : 868423425378812591,
		availability_remains : 69,
		availability_total : 1,
		availability_resale : 8679377608219262350,
		convert_stars : 6798187602506944135,
		first_sale_date : 68,
		last_sale_date : 2,
		upgrade_stars : 2938286754791389053,
		resell_min_stars : -6382116893405740331,
		title : 'ZaRUF6PXlT0LqmMs',
		released_by : $client->peerUser(
			user_id : 8406286619573379297,
		),
		per_user_total : 59,
		per_user_remains : 15,
		locked_until_date : 20,
		auction_slug : 'BZabhAzrgTGyQk9d',
		gifts_per_round : 62,
		auction_start_date : 76,
		upgrade_variants : 59,
		background : $client->starGiftBackground(
			center_color : 19,
			edge_color : 2,
			text_color : 38,
		),
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 7,
			outbox_accent_color : 22,
			message_colors : array(72),
			wallpaper : $client->wallPaper(
				id : 2653423849806132747,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 7388279130077632806,
				slug : 'UAwWq1c3oksIBxrE',
				document : $client->documentEmpty(
					id : -7426928534065914265,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 99,
					second_background_color : 63,
					third_background_color : 85,
					fourth_background_color : 50,
					intensity : 73,
					rotation : 92,
					emoticon : 'CZftFWXpjDyusaom',
				),
			),
		),
	),
);
```