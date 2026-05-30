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
		id : -1942974520530888752,
		sticker : $client->documentEmpty(
			id : 1143905570719503944,
		),
		stars : 1363610757814776795,
		availability_remains : 95,
		availability_total : 74,
		availability_resale : -7568615843629713011,
		convert_stars : -1110169717322881580,
		first_sale_date : 60,
		last_sale_date : 69,
		upgrade_stars : 3661065687510301774,
		resell_min_stars : -6718371104735164990,
		title : '8o1Ia9bMgf5XUCYh',
		released_by : $client->peerUser(
			user_id : -7119996500188856703,
		),
		per_user_total : 64,
		per_user_remains : 14,
		locked_until_date : 39,
		auction_slug : 'shfWak4eUopPKHuG',
		gifts_per_round : 1,
		auction_start_date : 46,
		upgrade_variants : 76,
		background : $client->starGiftBackground(
			center_color : 74,
			edge_color : 70,
			text_color : 17,
		),
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 1,
			outbox_accent_color : 16,
			message_colors : array(46),
			wallpaper : $client->wallPaper(
				id : -4707158094001592899,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -8048624912092216093,
				slug : 'mI9PR7H0gZrYaUQB',
				document : $client->documentEmpty(
					id : 9220855280276219735,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 7,
					second_background_color : 51,
					third_background_color : 26,
					fourth_background_color : 48,
					intensity : 21,
					rotation : 46,
					emoticon : '5O4HUh36oKXuxjw2',
				),
			),
		),
	),
);
```