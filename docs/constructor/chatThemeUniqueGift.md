# chatThemeUniqueGift

**Description** : *A chat theme based on a collectible gift &raquo;*

**Layer** : 218

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
		auction : true,
		id : 1733433231642384691,
		sticker : $client->documentEmpty(
			id : -8323771113311794937,
		),
		stars : 5956123061848406863,
		availability_remains : 12,
		availability_total : 86,
		availability_resale : 1684721420322642202,
		convert_stars : 1173992643667600622,
		first_sale_date : 53,
		last_sale_date : 6,
		upgrade_stars : -4474650694145701998,
		resell_min_stars : 4063787487827367605,
		title : 'mqVxL06vbe5tcAGp',
		released_by : $client->peerUser(
			user_id : 7282456788099785832,
		),
		per_user_total : 25,
		per_user_remains : 82,
		locked_until_date : 22,
		auction_slug : 'kZbECDcO5q7Hx92g',
		gifts_per_round : 9,
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 45,
			outbox_accent_color : 20,
			message_colors : array(27),
			wallpaper : $client->wallPaper(
				id : 1367316536945887038,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -4237471700277156850,
				slug : '6tHodKs2g7DLF8uY',
				document : $client->documentEmpty(
					id : 6261142032861592757,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 85,
					second_background_color : 63,
					third_background_color : 6,
					fourth_background_color : 79,
					intensity : 45,
					rotation : 71,
					emoticon : 'stCI6u7rzGbxTfO1',
				),
			),
		),
	),
);
```