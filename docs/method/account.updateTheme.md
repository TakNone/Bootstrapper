# account.updateTheme

**Description** : *Update theme*

**Layer** : 229

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
	format : 'hObqKSf4apJ3nAx9',
	theme : $client->inputTheme(
		id : -553943170240853550,
		access_hash : 1612995463208098480,
	),
	slug : '48gAf2H3SvU6EKNk',
	title : '9l0GzvH431ue5nMw',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 51,
			outbox_accent_color : 24,
			message_colors : array(71),
			wallpaper : $client->inputWallPaper(
				id : -3685533292695853736,
				access_hash : -8509093576543939705,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 93,
				second_background_color : 54,
				third_background_color : 25,
				fourth_background_color : 12,
				intensity : 50,
				rotation : 25,
				emoticon : 'jbhzwCXne9ilTIFH',
			),
		),
	),
);
```