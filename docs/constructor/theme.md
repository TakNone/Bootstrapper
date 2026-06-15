# theme

**Description** : *Theme*

**Layer** : 227

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
	id : -8074386583774558966,
	access_hash : -2240945828878776633,
	slug : 'bIRXoVcl2MC06YiK',
	title : 'lu8L214SAxrWm56M',
	document : $client->documentEmpty(
		id : -1472586606547281420,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 68,
			outbox_accent_color : 98,
			message_colors : array(66),
			wallpaper : $client->wallPaper(
				id : 8536203093221555114,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 2553820924711570836,
				slug : 'j1favQGd8cI09wVm',
				document : $client->documentEmpty(
					id : -3548178137997585305,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 92,
					second_background_color : 77,
					third_background_color : 90,
					fourth_background_color : 86,
					intensity : 57,
					rotation : 23,
					emoticon : 'GC2HwDStWeI6dfmE',
				),
			),
		),
	),
	emoticon : '6SwkX8ZgsGnxlqtU',
	installs_count : 29,
);
```