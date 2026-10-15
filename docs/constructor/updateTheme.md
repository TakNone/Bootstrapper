# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 229

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
		id : -6870954961462692789,
		access_hash : -9115270194691294790,
		slug : 'RqzBhLTd4YW5xPMX',
		title : 'ka0dmj4xKyzeYfG1',
		document : $client->documentEmpty(
			id : 7380816809014320409,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 86,
				outbox_accent_color : 47,
				message_colors : array(3),
				wallpaper : $client->wallPaper(
					id : 1573885667637262248,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : -1681707514692138646,
					slug : 'oYCNiZfy8MUhkTaF',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'X6bCDlU1Ropvk53N',
		installs_count : 0,
	),
);
```