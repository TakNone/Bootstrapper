# theme

**Description** : *Theme*

**Layer** : 211

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
	id : 3337817228894992427,
	access_hash : -7927625489180106163,
	slug : 'aNkBPVrT41onxgZI',
	title : 'kSem3IbGt2AJEwU6',
	document : $client->documentEmpty(
		id : 2631911867992637124,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 74,
			outbox_accent_color : 65,
			message_colors : array(44),
			wallpaper : $client->wallPaper(
				id : -3430758361646572411,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 5953761052790441067,
				slug : 'eucY8oJNavwS5xAI',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
	),
	emoticon : '53WrlkHK9Se7M8sT',
	installs_count : 4,
);
```