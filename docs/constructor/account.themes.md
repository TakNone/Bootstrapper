# account.themes

**Description** : *Installed themes*

**Layer** : 222

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
			id : 226236182819078124,
			access_hash : 299789570463129678,
			slug : 'u3aRWnIDFXpyH7t8',
			title : 'MvDb7wesdZQEjpCq',
			document : $client->documentEmpty(
				id : 2854784935767114951,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 86,
					outbox_accent_color : 18,
					message_colors : array(71),
					wallpaper : $client->wallPaper(
						id : -6664265572233530150,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : -5445870387449548877,
						slug : 'GDEP2H3uqeKjOiW9',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : '5uhxCbQ7LoEfpHrN',
			installs_count : 65,
		),
	),
);
```