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
		id : -2010948287663817885,
		access_hash : -6412125601639375623,
		slug : 'eQvizoJR5KE7Ch8T',
		title : '9deI2wX1ZF37VKYm',
		document : $client->documentEmpty(
			id : -3484007295790679931,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 58,
				outbox_accent_color : 28,
				message_colors : array(15),
				wallpaper : $client->wallPaper(...),
			),
		),
		emoticon : 'l21Yn48jDchIpx0J',
		installs_count : 89,
	),
);
```