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
	hash : -6476359970841705321,
	themes : array(
		$client->theme(
			creator : true,
			default : true,
			for_chat : true,
			id : 7072539692027974606,
			access_hash : 4024428389862282005,
			slug : 'DIyjrbN5cqPS8hfE',
			title : '6n9V0GMwhYRoND1b',
			document : $client->documentEmpty(
				id : 5260181793244491906,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(...),
					accent_color : 90,
					outbox_accent_color : 16,
					message_colors : array(69),
					wallpaper : $client->wallPaper(...),
				),
			),
			emoticon : 'OkUMVDmvEqoBFsG0',
			installs_count : 27,
		),
	),
);
```