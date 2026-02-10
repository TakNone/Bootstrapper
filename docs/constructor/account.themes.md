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
			id : 2761738578957462660,
			access_hash : 6754226925072302012,
			slug : 'om6ESvUbN2xHTsLB',
			title : 'biuUYNP6hSx2ZDKg',
			document : $client->documentEmpty(
				id : -4823515468974610772,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 56,
					outbox_accent_color : 90,
					message_colors : array(4),
					wallpaper : $client->wallPaper(
						id : -4261814550661129734,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : -6996363074010843918,
						slug : 'sI6X8tOQ0xzUZqLT',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'gkdpOTBrD216QhFI',
			installs_count : 65,
		),
	),
);
```