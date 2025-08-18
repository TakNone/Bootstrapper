# account.updateTheme

**Description** : *Update theme*

**Layer** : 211

```tl
account.updateTheme#2bf40ccc flags:# format:string theme:InputTheme slug:flags.0?string title:flags.1?string document:flags.2?InputDocument settings:flags.3?Vector<InputThemeSettings> = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	format : 'UYzIlWi3Fk81SV7j',
	theme : $client->inputTheme(
		id : -8313527988670916020,
		access_hash : -770989335903708569,
	),
	slug : 'Pd6W7tfAj45J32QM',
	title : 'MEYKBbjP9dCJLAX2',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 69,
			outbox_accent_color : 17,
			message_colors : array(82),
			wallpaper : $client->inputWallPaper(
				id : -6394135203214497262,
				access_hash : 246510909161531123,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 38,
				second_background_color : 72,
				third_background_color : 31,
				fourth_background_color : 30,
				intensity : 11,
				rotation : 18,
				emoticon : 'p1DUzFVrY8WvjTyO',
			),
		),
	),
);
```