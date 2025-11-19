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
	id : 4442235086194968953,
	access_hash : -1335109595370418129,
	slug : 'BoM5Ya2XLnPE930v',
	title : 'pKMvgELNoDYq5cwr',
	document : $client->documentEmpty(
		id : 9081119339594879690,
	),
	settings : array(
		$client->themeSettings(
			message_colors_animated : true,
			base_theme : $client->baseThemeClassic(),
			accent_color : 17,
			outbox_accent_color : 34,
			message_colors : array(70),
			wallpaper : $client->wallPaper(
				id : -7057598229613851484,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 8778353799469165306,
				slug : 'SPYAIUxnRCqy2lw3',
				document : $client->documentEmpty(
					id : 2148087993677923648,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 20,
					second_background_color : 100,
					third_background_color : 21,
					fourth_background_color : 34,
					intensity : 57,
					rotation : 34,
					emoticon : 'Xc956eHmSdzu1lU4',
				),
			),
		),
	),
	emoticon : 'OaE8PFNjTUbxfcq7',
	installs_count : 100,
);
```