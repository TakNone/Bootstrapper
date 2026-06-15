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
		id : 3814310967353257534,
		sticker : $client->documentEmpty(
			id : 8069823252417903942,
		),
		stars : 3372917302640307234,
		availability_remains : 28,
		availability_total : 13,
		availability_resale : 1911996082914539448,
		convert_stars : -1930541020639756564,
		first_sale_date : 17,
		last_sale_date : 10,
		upgrade_stars : 6022247352333563868,
		resell_min_stars : 8574981855841098368,
		title : 'ARr5dnjEz683uqPi',
		released_by : $client->peerUser(
			user_id : -1903621867861670420,
		),
		per_user_total : 25,
		per_user_remains : 49,
		locked_until_date : 91,
		auction_slug : 'zx1rn0qH5ak4oN23',
		gifts_per_round : 0,
		auction_start_date : 74,
		upgrade_variants : 88,
		background : $client->starGiftBackground(
			center_color : 2,
			edge_color : 69,
			text_color : 21,
		),
	),
	theme_settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 14,
			outbox_accent_color : 59,
			message_colors : array(70),
			wallpaper : $client->wallPaper(
				id : -8610373816727942953,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -3402523885601030418,
				slug : 'z9i1hEGBpba8A6dU',
				document : $client->documentEmpty(
					id : 8776428979601154723,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 29,
					second_background_color : 63,
					third_background_color : 56,
					fourth_background_color : 42,
					intensity : 4,
					rotation : 9,
					emoticon : 'Bmh4zcGWntXx60PS',
				),
			),
		),
	),
);
```