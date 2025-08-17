# account.themes

**Description** : *Installed themes*

**Layer** : 211

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
	hash : 4290924052686092872,
	themes : array(
		$client->theme(
			creator : true,
			default : true,
			for_chat : true,
			id : 7246472825923101092,
			access_hash : 6550248655504775506,
			slug : 'lLZPEW7fcOe3wJ51',
			title : 'nSGclsJATQ2ZyFgk',
			document : $client->documentEmpty(
				id : 4162868145557681128,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(...),
					accent_color : 23,
					outbox_accent_color : 27,
					message_colors : array(89),
					wallpaper : $client->wallPaper(...),
				),
			),
			emoticon : 'KDsTquhHpFalJZbi',
			installs_count : 96,
		),
	),
);
```