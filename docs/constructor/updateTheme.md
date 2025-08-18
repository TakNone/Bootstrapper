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
		id : -4957608913014405974,
		access_hash : 6459886171288109040,
		slug : 'Fh6YmlypOJqiEotX',
		title : 'umgf96XQn84y0jhB',
		document : $client->documentEmpty(
			id : 3250257058964477474,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 80,
				outbox_accent_color : 99,
				message_colors : array(51),
				wallpaper : $client->wallPaper(...),
			),
		),
		emoticon : '31t2krIEjYs45yGH',
		installs_count : 30,
	),
);
```