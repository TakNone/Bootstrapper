# account.themes

**Description** : *Installed themes*

**Layer** : 214

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
			id : -1901387749104255623,
			access_hash : -7806850025511750128,
			slug : 'jUPbWYyDvlthBF6c',
			title : 'Urp2oRcyPM914aim',
			document : $client->documentEmpty(
				id : -7590227351808815863,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(...),
					accent_color : 72,
					outbox_accent_color : 22,
					message_colors : array(92),
					wallpaper : $client->wallPaper(...),
				),
			),
			emoticon : 'XxUGFDdvBZR1Egi9',
			installs_count : 30,
		),
	),
);
```