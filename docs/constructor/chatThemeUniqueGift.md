# chatThemeUniqueGift

**Description** : *A chat theme based on a collectible gift &raquo;*

**Layer** : 225

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
		id : -257718839046106524,
		sticker : $client->documentEmpty(
			id : 8709855339338140330,
		),
		stars : -3317774961372742202,
		availability_remains : 81,
		availability_total : 46,
		availability_resale : 5647965007215198611,
		convert_stars : -8742171395953729139,
		first_sale_date : 0,
		last_sale_date : 99,
		upgrade_stars : 6574858095134746381,
		resell_min_stars : 672090010141848201,
		title : 'UKeNXVxSRYOwMHy0',
		released_by : $client->peerUser(
			user_id : 7811506882197563294,
		),
		per_user_total : 62,
		per_user_remains : 14,
		locked_until_date : 24,
		auction_slug : '7WrqOIUb2KB4tYRQ',
		gifts_per_round : 14,
		auction_start_date : 9,
		upgrade_variants : 5,
		background : $client->starGiftBackground(
			center_color : 23,
			edge_color : 71,
			text_color : 36,
		),
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 99,
			outbox_accent_color : 65,
			message_colors : array(31),
			wallpaper : $client->wallPaper(
				id : -1495170466527295737,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 1422203243216043357,
				slug : '3CGaQDJKMVej8L9u',
				document : $client->documentEmpty(
					id : -8998026501966794370,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 12,
					second_background_color : 19,
					third_background_color : 83,
					fourth_background_color : 11,
					intensity : 95,
					rotation : 26,
					emoticon : '2JUoMEGum6qLXRxc',
				),
			),
		),
	),
);
```