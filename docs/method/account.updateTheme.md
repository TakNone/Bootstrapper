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
	format : 'kWAc0CqnUeO6bMLw',
	theme : $client->inputTheme(
		id : 7141867499087772057,
		access_hash : 946455777574366965,
	),
	slug : 'yFZ4Eb80dnzM6Le1',
	title : 'bYvJF6APqdgo0Knp',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 77,
			outbox_accent_color : 67,
			message_colors : array(80),
			wallpaper : $client->inputWallPaper(
				id : 6177717014777234505,
				access_hash : -2472027460744564519,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 43,
				second_background_color : 33,
				third_background_color : 2,
				fourth_background_color : 77,
				intensity : 28,
				rotation : 34,
				emoticon : '4wsW5fzUGb1mXdkY',
			),
		),
	),
);
```