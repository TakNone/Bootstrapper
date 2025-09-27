# account.updateTheme

**Description** : *Update theme*

**Layer** : 216

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
	format : 'uEcHe7lTaWVBxQFt',
	theme : $client->inputTheme(
		id : 3067887783559134360,
		access_hash : -7465189350493868134,
	),
	slug : 'dgAIzocyjOCpG6sq',
	title : 'U0ThWxCnm3Dw6KLl',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 65,
			outbox_accent_color : 15,
			message_colors : array(99),
			wallpaper : $client->inputWallPaper(
				id : -1066198563657439099,
				access_hash : -8247748735869878395,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 28,
				second_background_color : 16,
				third_background_color : 92,
				fourth_background_color : 80,
				intensity : 81,
				rotation : 61,
				emoticon : 'lw0621soZ3Mtrck8',
			),
		),
	),
);
```