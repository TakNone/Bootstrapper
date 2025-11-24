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
	format : 'ZpRosQPnSxNiv9Ut',
	theme : $client->inputTheme(
		id : 8754779485742984207,
		access_hash : 6875201118075728900,
	),
	slug : 'pC4NMglf7ZKrVmik',
	title : 'xv6POHdYAMc8I3pD',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 35,
			outbox_accent_color : 47,
			message_colors : array(5),
			wallpaper : $client->inputWallPaper(
				id : 5883878846090574639,
				access_hash : 8773411762611694576,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 65,
				second_background_color : 73,
				third_background_color : 79,
				fourth_background_color : 21,
				intensity : 92,
				rotation : 7,
				emoticon : 'E62joHL9v1U7yu5f',
			),
		),
	),
);
```