# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 216

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
		id : -4587478221415026751,
		access_hash : -841857812502835954,
		slug : 'sHwgfiReF1YjylQJ',
		title : 'HecT38OhaItbvDQy',
		document : $client->documentEmpty(
			id : 6612209125589882245,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 37,
				outbox_accent_color : 70,
				message_colors : array(15),
				wallpaper : $client->wallPaper(...),
			),
		),
		emoticon : '42MZxDNqY7cUrOfH',
		installs_count : 89,
	),
);
```