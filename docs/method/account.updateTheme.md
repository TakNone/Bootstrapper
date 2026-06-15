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
	format : 'ViTxk3eg7OdNUX8S',
	theme : $client->inputTheme(
		id : -5041391734977657077,
		access_hash : 2140788157926848239,
	),
	slug : 'VlBjh8kpRZxsAS0I',
	title : 'mCjVPEiJwpbkHGBz',
	document : $client->inputDocumentEmpty(),
	settings : array(
		$client->inputThemeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 37,
			outbox_accent_color : 30,
			message_colors : array(29),
			wallpaper : $client->inputWallPaper(
				id : -8088019051988387304,
				access_hash : -1962829030199059921,
			),
			wallpaper_settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 25,
				second_background_color : 87,
				third_background_color : 100,
				fourth_background_color : 9,
				intensity : 60,
				rotation : 61,
				emoticon : 'EgLK1ke5JFAmo8qc',
			),
		),
	),
);
```