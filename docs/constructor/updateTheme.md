# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 233

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
		id : 2930728901043419549,
		access_hash : 7906759217134335005,
		slug : 'IiGYbFSXCeBko6pE',
		title : 'Bq6FWH0gIYXcUbSt',
		document : $client->documentEmpty(
			id : -8348145737107667728,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 56,
				outbox_accent_color : 89,
				message_colors : array(34),
				wallpaper : $client->wallPaper(
					id : -2478339621820424370,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : 8172249917100392428,
					slug : '3cCGO5w0pzl1KRD2',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'F3V0kRWSUh1deANv',
		installs_count : 95,
	),
);
```