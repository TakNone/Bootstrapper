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
	id : 6213973786807259743,
	access_hash : 8023045091161314431,
	slug : 'zZwtMoScWj182BGD',
	title : 'XN2gMIV0QdxuWJUl',
	document : $client->documentEmpty(
		id : -335224164259631528,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 82,
			outbox_accent_color : 80,
			message_colors : array(9),
			wallpaper : $client->wallPaper(
				id : 928205654429644219,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -3933116465456660341,
				slug : 'urW1RLOvmChq2Und',
				document : $client->documentEmpty(
					id : -962976985386370324,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 77,
					second_background_color : 88,
					third_background_color : 58,
					fourth_background_color : 33,
					intensity : 96,
					rotation : 21,
					emoticon : 'arjM8X30LZEkVpo1',
				),
			),
		),
	),
	emoticon : 'g3ZmK0pw2WFOa9Bc',
	installs_count : 4,
);
```