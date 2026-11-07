# theme

**Description** : *Theme*

**Layer** : 229

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
	id : 8041245968957241556,
	access_hash : 8368348806983228145,
	slug : 'aJinFBDu6E20h7rM',
	title : 'v0sIQBNfZh57DYVJ',
	document : $client->documentEmpty(
		id : -2758184774813075386,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 56,
			outbox_accent_color : 71,
			message_colors : array(26),
			wallpaper : $client->wallPaper(
				id : 3243433147870801357,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -8491835121499937925,
				slug : 'ryjHkUmP6tQaizKX',
				document : $client->documentEmpty(
					id : 3385064623958397489,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 12,
					second_background_color : 5,
					third_background_color : 41,
					fourth_background_color : 42,
					intensity : 50,
					rotation : 61,
					emoticon : 'tO3rqdabEDy4vXJQ',
				),
			),
		),
	),
	emoticon : 'Y9zWySPjtUweCkEM',
	installs_count : 27,
);
```