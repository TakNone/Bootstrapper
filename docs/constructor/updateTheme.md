# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 227

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
		id : -5372117084166991085,
		access_hash : 666633035177695001,
		slug : 'eHBb0pOtkJU6ma9n',
		title : 'MEbf4h1ZoXPeBqwp',
		document : $client->documentEmpty(
			id : 867706229797625473,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 19,
				outbox_accent_color : 38,
				message_colors : array(92),
				wallpaper : $client->wallPaper(
					id : 8847670695776243332,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : 7961069080596676718,
					slug : 'iraO1tYFGkew5gPd',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'OZnpueXHws2iUWEl',
		installs_count : 95,
	),
);
```