# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 225

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
		id : 8165811372010597097,
		access_hash : 5101749969202455853,
		slug : '2bKXzxSvFl7DI3jV',
		title : 'wDTMr6q8Rck2lSFm',
		document : $client->documentEmpty(
			id : 2628733049775357238,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 50,
				outbox_accent_color : 51,
				message_colors : array(94),
				wallpaper : $client->wallPaper(
					id : -470899475668525363,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : -1728452407557648745,
					slug : 'D8AmPzF3eUjBCbOt',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'c4O9ZPrHIbCoFL5m',
		installs_count : 91,
	),
);
```