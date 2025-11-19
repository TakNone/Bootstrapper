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
			id : -8266073605177230034,
			access_hash : -6625123953626070686,
			slug : 'so7xP6eTNF4amgHd',
			title : '4Mmw3oC7U5dqpVta',
			document : $client->documentEmpty(
				id : -790207485129389600,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 15,
					outbox_accent_color : 19,
					message_colors : array(8),
					wallpaper : $client->wallPaper(
						id : -5993362256352841328,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : 6695897335379841571,
						slug : 'o8L7bOQlaECUhyVd',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'CAsSk8uOGpy5dLcq',
			installs_count : 1,
		),
	),
);
```