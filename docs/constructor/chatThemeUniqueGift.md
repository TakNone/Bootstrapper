# chatThemeUniqueGift

**Description** : *A chat theme based on a collectible gift &raquo;*

**Layer** : 222

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
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -9086528967374376644,
		sticker : $client->documentEmpty(
			id : 3855441181181797162,
		),
		stars : -8061311144227598288,
		availability_remains : 100,
		availability_total : 80,
		availability_resale : -1608802248439299505,
		convert_stars : -6770629256792761943,
		first_sale_date : 94,
		last_sale_date : 30,
		upgrade_stars : -4533541023529499312,
		resell_min_stars : 2039949311139700226,
		title : 'jFz62Wv4oCcgdKQi',
		released_by : $client->peerUser(
			user_id : -6150067628547913442,
		),
		per_user_total : 52,
		per_user_remains : 24,
		locked_until_date : 84,
		auction_slug : 'VoExHN9viA6h7WaR',
		gifts_per_round : 58,
		auction_start_date : 79,
		upgrade_variants : 14,
		background : $client->starGiftBackground(
			center_color : 21,
			edge_color : 12,
			text_color : 10,
		),
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 27,
			outbox_accent_color : 53,
			message_colors : array(43),
			wallpaper : $client->wallPaper(
				id : 2876859635378217348,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 7084466504141429027,
				slug : 'W9Tryz27v0KEqbce',
				document : $client->documentEmpty(
					id : -2777194947681069136,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 21,
					second_background_color : 30,
					third_background_color : 61,
					fourth_background_color : 86,
					intensity : 32,
					rotation : 47,
					emoticon : '1C0KylraW59w3MzV',
				),
			),
		),
	),
);
```