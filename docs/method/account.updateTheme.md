# account.updateTheme

**Description** : *Update theme*

**Layer** : 227

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
	format : 'MWYJvt5kSocPGzaA',
	theme : $client->inputTheme(
		id : -2770938941195473156,
		access_hash : -3914516644435436850,
	),
	slug : 'G56X0WfVc8pJDLlA',
	title : 'quhTK4X5dF3UEZ2B',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 55,
			outbox_accent_color : 57,
			message_colors : array(11),
			wallpaper : $client->inputWallPaper(
				id : 8369889328796227948,
				access_hash : -3536266272471374741,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 90,
				second_background_color : 40,
				third_background_color : 54,
				fourth_background_color : 56,
				intensity : 75,
				rotation : 48,
				emoticon : 'XwljFUIyi3cWGoYu',
			),
		),
	),
);
```