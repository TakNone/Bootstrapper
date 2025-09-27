# updateTheme

**Description** : *A cloud theme was updated*

**Layer** : 214

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
		id : -4543129393386992347,
		access_hash : -2664111935378360935,
		slug : '6Og9DurF2fSEi71L',
		title : 'seQM34WkIV0drTmo',
		document : $client->documentEmpty(
			id : 1470617909240523665,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 85,
				outbox_accent_color : 8,
				message_colors : array(52),
				wallpaper : $client->wallPaper(...),
			),
		),
		emoticon : 'WJRDkehjl4cXHsNG',
		installs_count : 93,
	),
);
```