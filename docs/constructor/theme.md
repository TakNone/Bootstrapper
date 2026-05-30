# theme

**Description** : *Theme*

**Layer** : 225

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
	id : -7972272572062285295,
	access_hash : -3222756594652637559,
	slug : 'tT5SPDGs2c9LUja6',
	title : 'gz7H6TFtxJhW4yMl',
	document : $client->documentEmpty(
		id : 8946759848213982215,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 99,
			outbox_accent_color : 19,
			message_colors : array(4),
			wallpaper : $client->wallPaper(
				id : -744892478733999557,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5434619389453832786,
				slug : 'Wf35Hi1ZnAoFsIc7',
				document : $client->documentEmpty(
					id : 1556438045814062726,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 85,
					second_background_color : 96,
					third_background_color : 68,
					fourth_background_color : 83,
					intensity : 42,
					rotation : 10,
					emoticon : 'kTqfhHRUzmxWY8lO',
				),
			),
		),
	),
	emoticon : '5gGv27mBJYsRt0nz',
	installs_count : 53,
);
```