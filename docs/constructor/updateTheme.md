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
		id : 6386575020678025159,
		access_hash : 7590418966152654453,
		slug : 'sJZKDklIR4t5uTBS',
		title : 'cC3n4H0g1hBzy7ad',
		document : $client->documentEmpty(
			id : 5313884736482236078,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 53,
				outbox_accent_color : 31,
				message_colors : array(4),
				wallpaper : $client->wallPaper(
					id : -3800541159661096937,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : -660473546804505587,
					slug : 'ONvA3inWGVH9ZQzr',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : '36GAb8sUzHlrcNqw',
		installs_count : 64,
	),
);
```