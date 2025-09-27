# account.updateTheme

**Description** : *Update theme*

**Layer** : 214

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
	format : '0kShmjLMCK9EfWnx',
	theme : $client->inputTheme(
		id : 4540438599267831304,
		access_hash : -6212712486904807002,
	),
	slug : 'lYF9cOLi5PG0IM32',
	title : '1ekfUdqjpyzBwZb0',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 69,
			outbox_accent_color : 46,
			message_colors : array(7),
			wallpaper : $client->inputWallPaper(
				id : 8778669169649047105,
				access_hash : -2554691205825284461,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 4,
				second_background_color : 57,
				third_background_color : 23,
				fourth_background_color : 62,
				intensity : 44,
				rotation : 72,
				emoticon : 'AywqG2HxYDNr3s6h',
			),
		),
	),
);
```