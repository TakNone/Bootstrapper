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
		id : 7956756995165015420,
		access_hash : 3719482630408854640,
		slug : 'bxrkd2PAcmlTG7NL',
		title : 'lyIqD2QSvgEwaen1',
		document : $client->documentEmpty(
			id : 5467078083632139925,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 4,
				outbox_accent_color : 92,
				message_colors : array(48),
				wallpaper : $client->wallPaper(
					id : 2780778200047727097,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : 2734260882637713776,
					slug : '2QgjTWM8zvPLXZIA',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'E8BChUy2xaX0vL7G',
		installs_count : 10,
	),
);
```