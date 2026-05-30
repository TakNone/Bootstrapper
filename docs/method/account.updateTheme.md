# account.updateTheme

**Description** : *Update theme*

**Layer** : 222

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
	format : 'jgnrW1vxckfBL3Js',
	theme : $client->inputTheme(
		id : 1482052830695080887,
		access_hash : 3803450005598891007,
	),
	slug : 'aWbPkVy1ohj7psJ0',
	title : 'wkNi97PpDz8fuVBQ',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 76,
			outbox_accent_color : 22,
			message_colors : array(95),
			wallpaper : $client->inputWallPaper(
				id : 2602451214350321168,
				access_hash : -2250139097210809713,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 53,
				second_background_color : 28,
				third_background_color : 86,
				fourth_background_color : 84,
				intensity : 85,
				rotation : 45,
				emoticon : 'K8Gasp5vxFMuT3Rn',
			),
		),
	),
);
```