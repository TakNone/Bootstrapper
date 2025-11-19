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
		id : -4760282943240638469,
		sticker : $client->documentEmpty(
			id : 8342329271342487494,
		),
		stars : -3794100716203752620,
		availability_remains : 59,
		availability_total : 0,
		availability_resale : 2096385859608554058,
		convert_stars : -151168925688076523,
		first_sale_date : 62,
		last_sale_date : 78,
		upgrade_stars : -7938603321036319377,
		resell_min_stars : 7111456163283315908,
		title : 'ZRpMf7rzPU0dbB3m',
		released_by : $client->peerUser(
			user_id : 7042474483655280209,
		),
		per_user_total : 75,
		per_user_remains : 95,
		locked_until_date : 39,
		auction_slug : 'tWf3JOU8pDHmyhCZ',
		gifts_per_round : 35,
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 94,
			outbox_accent_color : 100,
			message_colors : array(39),
			wallpaper : $client->wallPaper(
				id : 3667049770448627375,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -3080366744509946974,
				slug : 'VgZKOho85HNQIDM9',
				document : $client->documentEmpty(
					id : 2966913011443445840,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 44,
					second_background_color : 100,
					third_background_color : 46,
					fourth_background_color : 50,
					intensity : 63,
					rotation : 2,
					emoticon : 'LlToPjkKW8Swt0Hz',
				),
			),
		),
	),
);
```