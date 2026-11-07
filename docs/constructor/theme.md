# theme

**Description** : *Theme*

**Layer** : 233

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
	id : -3192238479774242869,
	access_hash : -8963085983414318303,
	slug : 'oPfqNphYcgU8ulxH',
	title : 'siDpzmwuKZdYMS4A',
	document : $client->documentEmpty(
		id : -528906432948600927,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 91,
			outbox_accent_color : 60,
			message_colors : array(5),
			wallpaper : $client->wallPaper(
				id : -7444788987803345870,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -8508600381280563016,
				slug : 'PkAFeXKGN5xoViuf',
				document : $client->documentEmpty(
					id : 1658327199015337207,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 11,
					second_background_color : 16,
					third_background_color : 68,
					fourth_background_color : 0,
					intensity : 47,
					rotation : 48,
					emoticon : 'ygUODawQFcWE9hzX',
				),
			),
		),
	),
	emoticon : 'Id29xPtTcYXQeE7K',
	installs_count : 71,
);
```