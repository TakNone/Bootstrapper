# account.themes

**Description** : *Installed themes*

**Layer** : 229

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
			id : -3515908596356978905,
			access_hash : 3794769849168936119,
			slug : 'vTbYHMzkBS4L2GJK',
			title : 'a5BS0vNuxyYQAiEJ',
			document : $client->documentEmpty(
				id : -8028445269467323354,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 85,
					outbox_accent_color : 46,
					message_colors : array(82),
					wallpaper : $client->wallPaper(
						id : 49180546762858632,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : -7302378585010634112,
						slug : 'r5eCqU6wKtfDpvkd',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'VEea0UoG2MuYksO7',
			installs_count : 42,
		),
	),
);
```