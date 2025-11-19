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
	format : 'apCSq37iP0BLo9u1',
	theme : $client->inputTheme(
		id : -7687766474418859250,
		access_hash : 6180563636422753051,
	),
	slug : 't5iM8yog9RFYfNjl',
	title : '3lh5dJUjKmeSogxw',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 7,
			outbox_accent_color : 20,
			message_colors : array(55),
			wallpaper : $client->inputWallPaper(
				id : 8939293879159366260,
				access_hash : 4324933586448682271,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 59,
				second_background_color : 43,
				third_background_color : 11,
				fourth_background_color : 84,
				intensity : 81,
				rotation : 49,
				emoticon : '7t53NKUn6PFDjbdR',
			),
		),
	),
);
```