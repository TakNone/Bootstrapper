# theme

**Description** : *Theme*

**Layer** : 222

```tl
theme#a00e67d6 flags:# creator:flags.0?true default:flags.1?true for_chat:flags.5?true id:long access_hash:long slug:string title:string document:flags.2?Document settings:flags.3?Vector<ThemeSettings> emoticon:flags.6?string installs_count:flags.4?int = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **creator** | [`flags.0?true`](type/true) | Whether the current user is the creator of this theme |
| **default** | [`flags.1?true`](type/true) | Whether this is the default theme |
| **for_chat** | [`flags.5?true`](type/true) | Whether this theme is meant to be used as a chat theme |
| <mark>id</mark> | [`long`](type/long) | Theme ID |
| <mark>access_hash</mark> | [`long`](type/long) | Theme access hash |
| <mark>slug</mark> | [`string`](type/string) | Unique theme ID |
| <mark>title</mark> | [`string`](type/string) | Theme name |
| **document** | [`flags.2?Document`](type/Document) | Theme |
| **settings** | [`flags.3?Vector<ThemeSettings>`](type/ThemeSettings) | Theme settings |
| **emoticon** | [`flags.6?string`](type/string) | Theme emoji |
| **installs_count** | [`flags.4?int`](type/int) | Installation count |

---

## Type

[Theme](type/Theme)

---

## Example

```php
$theme = $client->theme(
	creator : true,
	default : true,
	for_chat : true,
	id : -1851439719343456393,
	access_hash : 598421003714838104,
	slug : 'IAtNip4M3ucTdXhZ',
	title : '02N1XuFfDkWPyebd',
	document : $client->documentEmpty(
		id : -1156453019898797075,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 99,
			outbox_accent_color : 23,
			message_colors : array(2),
			wallpaper : $client->wallPaper(
				id : 5777205119242555487,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 2816056014968509810,
				slug : 'ixbcgkX8M19QdJqp',
				document : $client->documentEmpty(
					id : 4027868766226414474,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 72,
					second_background_color : 81,
					third_background_color : 39,
					fourth_background_color : 66,
					intensity : 48,
					rotation : 1,
					emoticon : 'hZKm2jt1uEBRObDz',
				),
			),
		),
	),
	emoticon : 'lXBr23OJPzsx4EwH',
	installs_count : 99,
);
```