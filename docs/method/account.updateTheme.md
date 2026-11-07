# account.updateTheme

**Description** : *Update theme*

**Layer** : 233

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
	format : 'MysOfLboWkTHrQmj',
	theme : $client->inputTheme(
		id : 3191065115375586154,
		access_hash : 9216354419881354713,
	),
	slug : '2MDLS36pemq8ysdK',
	title : 'EKawNmJu1OBsV5xS',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 77,
			outbox_accent_color : 90,
			message_colors : array(1),
			wallpaper : $client->inputWallPaper(
				id : 2402941225787688772,
				access_hash : -3357179043377024673,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 23,
				second_background_color : 47,
				third_background_color : 25,
				fourth_background_color : 73,
				intensity : 22,
				rotation : 34,
				emoticon : 'vEKBFd7moMLt0Tug',
			),
		),
	),
);
```