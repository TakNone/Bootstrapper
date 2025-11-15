# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 218

```tl
updateTheme#8216fba3 theme:Theme = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>theme</mark> | [`Theme`](type/Theme) | Theme |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateTheme(
	theme : $client->theme(
		creator : true,
		default : true,
		for_chat : true,
		id : 1876168975774441535,
		access_hash : 5706655983155493865,
		slug : '14ByYRFz0OCJv7oE',
		title : 'RtTiqC0v79yfszXJ',
		document : $client->documentEmpty(
			id : -7053677816911403672,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 80,
				outbox_accent_color : 67,
				message_colors : array(72),
				wallpaper : $client->wallPaper(
					id : 9193936860387077641,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : 3706019881460630967,
					slug : 'MVE0htrGUmPZJgAw',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'IR2dkeu9nMTwgOfS',
		installs_count : 87,
	),
);
```