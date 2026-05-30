# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 222

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
		id : -992637949881011576,
		access_hash : 6769106247535936361,
		slug : 'wXzWTnf0kC7aydh4',
		title : 'AseWcEPxtlVdFOi2',
		document : $client->documentEmpty(
			id : -4422259483889230878,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 46,
				outbox_accent_color : 5,
				message_colors : array(32),
				wallpaper : $client->wallPaper(
					id : -2196944108900280912,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : -5985621856704572833,
					slug : 'qFWgTko2tS1dhrjU',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'DmQl0OPAkUEyscW1',
		installs_count : 49,
	),
);
```