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
	id : -4468273156381035521,
	access_hash : -3123133485683922218,
	slug : 'cT86VwL0YDxlUmOn',
	title : 'fgHPrKkQS7cRdhyp',
	document : $client->documentEmpty(
		id : 3628232471464485053,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 61,
			outbox_accent_color : 66,
			message_colors : array(95),
			wallpaper : $client->wallPaper(
				id : -105354576069492455,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -2999700877024484965,
				slug : 'KGguFLIQPWDmxV8e',
				document : $client->documentEmpty(
					id : -6769525420017867992,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 24,
					second_background_color : 30,
					third_background_color : 59,
					fourth_background_color : 41,
					intensity : 98,
					rotation : 39,
					emoticon : 'hlEnVuMAD3FdwjcP',
				),
			),
		),
	),
	emoticon : 'V8GRdQ7wZAr9N5tM',
	installs_count : 11,
);
```