# theme

**Description** : *Theme*

**Layer** : 214

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
	id : -5495880245704068976,
	access_hash : 442976012002653465,
	slug : 'cWl97QRB6btC34uT',
	title : 'nE4IbKQN8L9rqS5j',
	document : $client->documentEmpty(
		id : -8363760782052430712,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 14,
			outbox_accent_color : 74,
			message_colors : array(78),
			wallpaper : $client->wallPaper(
				id : -8920019620522024939,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 841723485272911126,
				slug : 'vIDjo5f7GH46XxsO',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
	),
	emoticon : 'V6wzZ832bY57rdcW',
	installs_count : 35,
);
```