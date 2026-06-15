# chatThemeUniqueGift

**Description** : *A chat theme based on a collectible gift &raquo;*

**Layer** : 227

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
		id : 2758946745206251466,
		sticker : $client->documentEmpty(
			id : -5764012582901481046,
		),
		stars : 8710860028946134837,
		availability_remains : 79,
		availability_total : 7,
		availability_resale : 7886020461190159555,
		convert_stars : 4497238118873918106,
		first_sale_date : 90,
		last_sale_date : 67,
		upgrade_stars : 652734461295040055,
		resell_min_stars : -3237625773504467044,
		title : '7bzFya4MH6Sl2WjO',
		released_by : $client->peerUser(
			user_id : 5211467146474302460,
		),
		per_user_total : 36,
		per_user_remains : 91,
		locked_until_date : 41,
		auction_slug : '8vOfj0mZu4qpd13Y',
		gifts_per_round : 92,
		auction_start_date : 5,
		upgrade_variants : 65,
		background : $client->starGiftBackground(
			center_color : 27,
			edge_color : 16,
			text_color : 26,
		),
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 25,
			outbox_accent_color : 39,
			message_colors : array(33),
			wallpaper : $client->wallPaper(
				id : 4215564776226294969,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 513403169271519848,
				slug : '3UskjMm2oHbDBSzp',
				document : $client->documentEmpty(
					id : 158611524012404503,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 49,
					second_background_color : 95,
					third_background_color : 27,
					fourth_background_color : 63,
					intensity : 89,
					rotation : 96,
					emoticon : 'tGJnTBxFI34f9E8y',
				),
			),
		),
	),
);
```