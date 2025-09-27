# account.themes

**Description** : *Installed themes*

**Layer** : 216

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
			id : -8342724535224227097,
			access_hash : 5722551522046436819,
			slug : 'k7osumYrtKTVjhSE',
			title : 'wvV1C0eHrm4Wf2Li',
			document : $client->documentEmpty(
				id : -103885301945192519,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(...),
					accent_color : 15,
					outbox_accent_color : 74,
					message_colors : array(45),
					wallpaper : $client->wallPaper(...),
				),
			),
			emoticon : 'R6wYJ78UjBixHIvb',
			installs_count : 77,
		),
	),
);
```