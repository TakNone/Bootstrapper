# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 211

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
		id : -6849451434027730381,
		access_hash : -7997527964615814991,
		slug : 'q4XBrtzhRJfim1IE',
		title : 'vFyXMe0cQxzO1dsS',
		document : $client->documentEmpty(
			id : -1971476211511409377,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 85,
				outbox_accent_color : 6,
				message_colors : array(50),
				wallpaper : $client->wallPaper(...),
			),
		),
		emoticon : 'riB5bHMc2YRtdTgm',
		installs_count : 83,
	),
);
```