# messages.updateTheme

**Layer** : 214

```tl
messages.updateTheme#5cb367d5 flags:# format:string theme:InputTheme slug:flags.0?string title:flags.1?string document:flags.2?InputDocument settings:flags.3?InputThemeSettings = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>format</mark> | [`string`](type/string) | NOTHING |
| <mark>theme</mark> | [`InputTheme`](type/InputTheme) | NOTHING |
| **slug** | [`flags.0?string`](type/string) | NOTHING |
| **title** | [`flags.1?string`](type/string) | NOTHING |
| **document** | [`flags.2?InputDocument`](type/InputDocument) | NOTHING |
| **settings** | [`flags.3?InputThemeSettings`](type/InputThemeSettings) | NOTHING |

---

## Result

[Theme](type/Theme)

---

## Example

```php
$theme = $client->messages->updateTheme(
	format : 'hOuUaYidPG7e62t5',
	theme : $client->inputTheme(
		id : -7621685036006309142,
		access_hash : 8637035181351994211,
	),
	slug : 'wxU2eLsaor9dXKHi',
	title : 'OlIL7TtV1ZQBFmx3',
	document : $client->inputDocumentEmpty(),
	settings : $client->inputThemeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 1,
		outbox_accent_color : 56,
		message_colors : array(5),
		wallpaper : $client->inputWallPaper(
			id : -8466299669408636892,
			access_hash : -7850800399303512675,
		),
		wallpaper_settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 16,
			second_background_color : 49,
			third_background_color : 36,
			fourth_background_color : 18,
			intensity : 35,
			rotation : 82,
			emoticon : 'IL6sf2rFWhwY7540',
		),
	),
);
```