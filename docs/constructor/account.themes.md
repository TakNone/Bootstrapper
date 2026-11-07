# account.themes

**Description** : *Installed themes*

**Layer** : 233

```tl
account.themes#9a3d8c6d hash:long themes:Vector<Theme> = account.Themes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>themes</mark> | [`Vector<Theme>`](type/Theme) | Themes |

---

## Type

[account.Themes](type/account.Themes)

---

## Example

```php
$accountThemes = $client->account->themes(
	hash : 0,
	themes : array(
		$client->theme(
			creator : true,
			default : true,
			for_chat : true,
			id : 3771122296261934565,
			access_hash : -2086750972279576934,
			slug : 'jcE1B834OQnMr7FU',
			title : 'Q9Suo3h6TesNC28R',
			document : $client->documentEmpty(
				id : -124310180058208902,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 100,
					outbox_accent_color : 1,
					message_colors : array(85),
					wallpaper : $client->wallPaper(
						id : 6695820015637905010,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : 8917561858439982596,
						slug : 'SFo5WIrOKiYh7VUx',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'zR0Cm4ePsAnh53uJ',
			installs_count : 63,
		),
	),
);
```