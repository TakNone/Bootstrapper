# chatThemeUniqueGift

**Description** : *A chat theme based on a collectible gift &raquo;*

**Layer** : 233

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
		id : 1742526294502600107,
		sticker : $client->documentEmpty(
			id : 1414607265964599756,
		),
		stars : -1213214021271219763,
		availability_remains : 81,
		availability_total : 70,
		availability_resale : 483467147303366915,
		convert_stars : 5756353335755952018,
		first_sale_date : 76,
		last_sale_date : 11,
		upgrade_stars : -2661933996711792848,
		resell_min_stars : -7254306450871933477,
		title : 'DKOkZfR2geUyhviH',
		released_by : $client->peerUser(
			user_id : -5909436737782775113,
		),
		per_user_total : 83,
		per_user_remains : 87,
		locked_until_date : 68,
		auction_slug : 'aTNtmosciVzgGlqh',
		gifts_per_round : 39,
		auction_start_date : 69,
		upgrade_variants : 29,
		background : $client->starGiftBackground(
			center_color : 35,
			edge_color : 46,
			text_color : 7,
		),
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 13,
			outbox_accent_color : 19,
			message_colors : array(54),
			wallpaper : $client->wallPaper(
				id : 4013648182900384229,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 9214667069896412772,
				slug : 'lzfm05nGWukcLDiH',
				document : $client->documentEmpty(
					id : -324551731644642301,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 32,
					second_background_color : 50,
					third_background_color : 12,
					fourth_background_color : 6,
					intensity : 42,
					rotation : 96,
					emoticon : '1whGDfoZbYyxc7S0',
				),
			),
		),
	),
);
```