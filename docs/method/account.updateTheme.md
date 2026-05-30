# account.updateTheme

**Description** : *Update theme*

**Layer** : 225

```tl
account.updateTheme#2bf40ccc flags:# format:string theme:InputTheme slug:flags.0?string title:flags.1?string document:flags.2?InputDocument settings:flags.3?Vector<InputThemeSettings> = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>format</mark> | [`string`](type/string) | Theme format, a string that identifies the theming engines supported by the client |
| <mark>theme</mark> | [`InputTheme`](type/InputTheme) | Theme to update |
| **slug** | [`flags.0?string`](type/string) | Unique theme ID |
| **title** | [`flags.1?string`](type/string) | Theme name |
| **document** | [`flags.2?InputDocument`](type/InputDocument) | Theme file |
| **settings** | [`flags.3?Vector<InputThemeSettings>`](type/InputThemeSettings) | Theme settings |

---

## Result

[Theme](type/Theme)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **THEME_INVALID** | `400` | Invalid theme provided |

---

## Example

```php
$theme = $client->account->updateTheme(
	format : '71SKDWxu32dYHltf',
	theme : $client->inputTheme(
		id : -7198431567132497093,
		access_hash : -5962918378216558342,
	),
	slug : '2HZEjOmgRQWM73kI',
	title : 'gVUhLMD1lSp97Kr5',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 48,
			outbox_accent_color : 9,
			message_colors : array(22),
			wallpaper : $client->inputWallPaper(
				id : -3582262429583739356,
				access_hash : -8858471196673681731,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 75,
				second_background_color : 38,
				third_background_color : 54,
				fourth_background_color : 90,
				intensity : 93,
				rotation : 45,
				emoticon : 'sFok9KMrUq6YHc1A',
			),
		),
	),
);
```