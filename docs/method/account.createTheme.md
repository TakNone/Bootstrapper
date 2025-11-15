# account.createTheme

**Description** : *Create a theme*

**Layer** : 216

```tl
account.createTheme#652e4400 flags:# slug:string title:string document:flags.2?InputDocument settings:flags.3?Vector<InputThemeSettings> = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>slug</mark> | [`string`](type/string) | Unique theme ID used to generate theme deep links, can be empty to autogenerate a random ID |
| <mark>title</mark> | [`string`](type/string) | Theme name |
| **document** | [`flags.2?InputDocument`](type/InputDocument) | Theme file |
| **settings** | [`flags.3?Vector<InputThemeSettings>`](type/InputThemeSettings) | Theme settings, multiple values can be provided for the different base themes (day/night mode, etc) |

---

## Result

[Theme](type/Theme)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **THEME_MIME_INVALID** | `400` | The theme's MIME type is invalid |
| **THEME_TITLE_INVALID** | `400` | The specified theme title is invalid |

---

## Example

```php
$theme = $client->account->createTheme(
	slug : 'Q4TJNUmeDPIcZqMh',
	title : 'xbNZouRgCDjXvh6q',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 62,
			outbox_accent_color : 67,
			message_colors : array(72),
			wallpaper : $client->inputWallPaper(
				id : 8977146224841021321,
				access_hash : 1002111087122549602,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 8,
				second_background_color : 43,
				third_background_color : 79,
				fourth_background_color : 28,
				intensity : 47,
				rotation : 5,
				emoticon : 'OSQGeYHa62ocbZPp',
			),
		),
	),
);
```