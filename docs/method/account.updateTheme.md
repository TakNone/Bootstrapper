# account.updateTheme

**Description** : *Update theme*

**Layer** : 218

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
	format : 'yu8IeJt9frOqh3XA',
	theme : $client->inputTheme(
		id : -5388931693011647562,
		access_hash : -1590837408115996041,
	),
	slug : 'FjMkzUut2NRZ1Wfl',
	title : '8jrAIwEc6abWLdQY',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 71,
			outbox_accent_color : 22,
			message_colors : array(96),
			wallpaper : $client->inputWallPaper(
				id : 4738762414445171614,
				access_hash : 7540811384755810645,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 7,
				second_background_color : 50,
				third_background_color : 25,
				fourth_background_color : 77,
				intensity : 57,
				rotation : 84,
				emoticon : 'Ty2nVK9NBmj0Iqpd',
			),
		),
	),
);
```