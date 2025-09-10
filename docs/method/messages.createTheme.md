# messages.createTheme

**Layer** : 214

```tl
messages.createTheme#8432c21f flags:# slug:string title:string document:flags.2?InputDocument settings:flags.3?InputThemeSettings = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| **document** | [`flags.2?InputDocument`](type/InputDocument) | NOTHING |
| **settings** | [`flags.3?InputThemeSettings`](type/InputThemeSettings) | NOTHING |

---

## Result

[Theme](type/Theme)

---

## Example

```php
$theme = $client->messages->createTheme(
	slug : 'yTpoSIr0dvXgchl1',
	title : 'ZiUKMWxJnHBlebqX',
	document : $client->inputDocumentEmpty(),
	settings : $client->inputThemeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 39,
		outbox_accent_color : 16,
		message_colors : array(90),
		wallpaper : $client->inputWallPaper(
			id : 5236462741923035822,
			access_hash : -3649979791359914496,
		),
		wallpaper_settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 69,
			second_background_color : 99,
			third_background_color : 99,
			fourth_background_color : 26,
			intensity : 97,
			rotation : 97,
			emoticon : 'vwCUR0NSZhJngxi6',
		),
	),
);
```