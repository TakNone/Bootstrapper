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
		id : 5801457239171615843,
		access_hash : -3988243469942350610,
		slug : 'yb0S5AHm3sVDx6jL',
		title : '5naRxfAd3uPk0bCl',
		document : $client->documentEmpty(
			id : 6751630455403197143,
		),
		settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(),
				accent_color : 4,
				outbox_accent_color : 67,
				message_colors : array(88),
				wallpaper : $client->wallPaper(
					id : -1709151193045116231,
					creator : true,
					default : true,
					pattern : true,
					dark : true,
					access_hash : -3240712121340888176,
					slug : 'R7uM8Sc06VeDWB5y',
					document : $client->documentEmpty(...),
					settings : $client->wallPaperSettings(...),
				),
			),
		),
		emoticon : 'tFgxcX1I9GkKyN6Q',
		installs_count : 96,
	),
);
```