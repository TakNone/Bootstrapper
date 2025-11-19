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
			id : -4846058484257886115,
			access_hash : -4864447317852724164,
			slug : 'gzJ9NYvQxy7qWtSe',
			title : '7zxn4kb8hiXOHTrK',
			document : $client->documentEmpty(
				id : -1786780409834898756,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 96,
					outbox_accent_color : 6,
					message_colors : array(90),
					wallpaper : $client->wallPaper(
						id : -878299950665386898,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : -267667764862078293,
						slug : 'PV45y12oT3gRJ0AU',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 'LaKvYHeDhl1mEcr8',
			installs_count : 67,
		),
	),
);
```