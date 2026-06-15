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
			id : 6152164052501033948,
			access_hash : -8665488253806063887,
			slug : '8Hn7kPEU3TMagmIS',
			title : 'dHQ9rV4B7T2k0MSE',
			document : $client->documentEmpty(
				id : -876613620974013472,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 25,
					outbox_accent_color : 76,
					message_colors : array(17),
					wallpaper : $client->wallPaper(
						id : -3935423232196860624,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : 5395196116880097457,
						slug : 'l9xwgPr0JSj6aA5z',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'vgCRrOsU2xbAJ61w',
			installs_count : 12,
		),
	),
);
```