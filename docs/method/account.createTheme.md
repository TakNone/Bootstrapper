# account.createTheme

**Description** : *Create a theme*

**Layer** : 227

```tl
account.createTheme#652e4400 flags:# slug:string title:string document:flags.2?InputDocument settings:flags.3?Vector<InputThemeSettings> = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	slug : 'IhePsLRpbyfWa9Ej',
	title : 'vQJHLi5DwcqSNUA3',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 17,
			outbox_accent_color : 45,
			message_colors : array(82),
			wallpaper : $client->inputWallPaper(
				id : -1051838582347722687,
				access_hash : -2579775456068650180,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 27,
				second_background_color : 95,
				third_background_color : 16,
				fourth_background_color : 6,
				intensity : 76,
				rotation : 65,
				emoticon : '5kYLlwR237xhe4sP',
			),
		),
	),
);
```