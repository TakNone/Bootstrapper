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
		id : 5138859430781645477,
		access_hash : -4505815378997630760,
		slug : 'cRKZJu5lfdrva3wY',
		title : 'vVGOqzIQTjy1LHWb',
		document : $client->documentEmpty(
			id : 2788822355975792074,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 31,
				outbox_accent_color : 83,
				message_colors : array(57),
				wallpaper : $client->wallPaper(
					id : -6922900566953795109,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : 3032413786318583338,
					slug : 'bEsk45eOl7MYaQR1',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : '1EjHdJkvU562orqY',
		installs_count : 40,
	),
);
```