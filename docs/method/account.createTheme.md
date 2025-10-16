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
	slug : 'R97GkD3O1CQHeoXg',
	title : 'O51GEMtnDvRaW362',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 76,
			outbox_accent_color : 20,
			message_colors : array(69),
			wallpaper : $client->inputWallPaper(
				id : -6918618266969727062,
				access_hash : 5850809453814151405,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 93,
				second_background_color : 9,
				third_background_color : 19,
				fourth_background_color : 66,
				intensity : 32,
				rotation : 5,
				emoticon : 'vrc6z8ebJCgtF5VA',
			),
		),
	),
);
```