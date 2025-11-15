# theme

**Description** : *Theme*

**Layer** : 218

```tl
theme#a00e67d6 flags:# creator:flags.0?true default:flags.1?true for_chat:flags.5?true id:long access_hash:long slug:string title:string document:flags.2?Document settings:flags.3?Vector<ThemeSettings> emoticon:flags.6?string installs_count:flags.4?int = Theme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 5301846302103861496,
	access_hash : -4804372902623935623,
	slug : 'shJolYWrkz5aGXub',
	title : '0BArTNDbMaYStxRo',
	document : $client->documentEmpty(
		id : -4974249995424558517,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 29,
			outbox_accent_color : 67,
			message_colors : array(13),
			wallpaper : $client->wallPaper(
				id : -6693638374395134410,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -1734887403430828100,
				slug : 'bXncSq6N5upKykZC',
				document : $client->documentEmpty(
					id : -7731412614387776314,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 83,
					second_background_color : 71,
					third_background_color : 29,
					fourth_background_color : 97,
					intensity : 69,
					rotation : 32,
					emoticon : 'aKpbI6YF3jXCeRQJ',
				),
			),
		),
	),
	emoticon : 'JjEKxlN3IVGwt8P9',
	installs_count : 76,
);
```