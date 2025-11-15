# account.updateTheme

**Description** : *Update theme*

**Layer** : 216

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
	format : '3aGm0SDbOgHXLhPr',
	theme : $client->inputTheme(
		id : -2923236219177969856,
		access_hash : -654015395551026977,
	),
	slug : 'ironqKk19e0MQFDH',
	title : 'bQLF8l3rEf04GDgh',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 56,
			outbox_accent_color : 35,
			message_colors : array(41),
			wallpaper : $client->inputWallPaper(
				id : 1020351668481431566,
				access_hash : 1021755742700387671,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 89,
				second_background_color : 35,
				third_background_color : 50,
				fourth_background_color : 86,
				intensity : 86,
				rotation : 61,
				emoticon : 'BKILGMbiNV2yxUSJ',
			),
		),
	),
);
```