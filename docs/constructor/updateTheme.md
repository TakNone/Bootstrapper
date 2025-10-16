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
		id : 791239320001244066,
		access_hash : 3705767969878106665,
		slug : 'cp2KrAa0hoCvTlMi',
		title : 'pF7gMd1XCDmfUoyu',
		document : $client->documentEmpty(
			id : 6875353493880880679,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 8,
				outbox_accent_color : 54,
				message_colors : array(10),
				wallpaper : $client->wallPaper(...),
			),
		),
		emoticon : 'oFRkSQaK4LjMb17n',
		installs_count : 90,
	),
);
```