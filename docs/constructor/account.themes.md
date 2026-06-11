# account.themes

**Description** : *Installed themes*

**Layer** : 227

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
			id : 5697208674911693237,
			access_hash : 5947426191596294122,
			slug : 'xwQARG68gDOr19he',
			title : 'NZl9rdKEPSBGkpxY',
			document : $client->documentEmpty(
				id : -1685274661029619975,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 40,
					outbox_accent_color : 26,
					message_colors : array(97),
					wallpaper : $client->wallPaper(
						id : -7852212339628758794,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : -7061079137692190641,
						slug : 'kVA0ouINhdQlx8cZ',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'LIcC2M4WwnSufvP6',
			installs_count : 92,
		),
	),
);
```