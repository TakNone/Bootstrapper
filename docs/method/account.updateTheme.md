# account.updateTheme

**Description** : *Update theme*

**Layer** : 222

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
	format : 'A5yYulqdU1imN6Dk',
	theme : $client->inputTheme(
		id : -6328690966424488105,
		access_hash : -1648647819769167392,
	),
	slug : '2C1EFunRNqePv5SM',
	title : 'lOpcmAeSGoVwakYq',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 70,
			outbox_accent_color : 28,
			message_colors : array(83),
			wallpaper : $client->inputWallPaper(
				id : 6873871642145968398,
				access_hash : 5036129067579218466,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 70,
				second_background_color : 14,
				third_background_color : 53,
				fourth_background_color : 71,
				intensity : 100,
				rotation : 13,
				emoticon : 'ai05RZeqG7EDIj9O',
			),
		),
	),
);
```