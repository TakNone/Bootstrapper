# account.themes

**Description** : *Installed themes*

**Layer** : 218

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
			id : -6470141580814434843,
			access_hash : 4053479533359801265,
			slug : 'ITzgnJZtbq95pc7j',
			title : 'tIX9R1kuFxojsMVC',
			document : $client->documentEmpty(
				id : 2843072254661853890,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 74,
					outbox_accent_color : 68,
					message_colors : array(16),
					wallpaper : $client->wallPaper(
						id : 3996146207278398838,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : -4053729148286832078,
						slug : 'MOLDjBUKV8gZ9f5E',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'kgHFdafGnViIAzcB',
			installs_count : 55,
		),
	),
);
```