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
		id : -734064689064939972,
		sticker : $client->documentEmpty(
			id : 6649585454396841110,
		),
		stars : 8890375046212508375,
		availability_remains : 50,
		availability_total : 31,
		availability_resale : -8240332287287323955,
		convert_stars : 6288822784634677910,
		first_sale_date : 86,
		last_sale_date : 68,
		upgrade_stars : 8399286824795223949,
		resell_min_stars : 5373335817169320408,
		title : 'bWc1A6Dl0SV8NQLv',
		released_by : $client->peerUser(
			user_id : -4685871226461158018,
		),
		per_user_total : 49,
		per_user_remains : 96,
		locked_until_date : 99,
		auction_slug : 'ouAfYRrOtzUvaZJE',
		gifts_per_round : 1,
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 40,
			outbox_accent_color : 20,
			message_colors : array(28),
			wallpaper : $client->wallPaper(
				id : -3181497474192001507,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 773856673517969591,
				slug : '5RDXVFi1UPo4bmL3',
				document : $client->documentEmpty(
					id : 626534088523142291,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 67,
					second_background_color : 13,
					third_background_color : 63,
					fourth_background_color : 62,
					intensity : 98,
					rotation : 5,
					emoticon : 'ioApLPesXGftTSln',
				),
			),
		),
	),
);
```