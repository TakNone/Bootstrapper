# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 216

```tl
channelAdminLogEventActionChangeWallpaper#31bb5d52 prev_value:WallPaper new_value:WallPaper = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`WallPaper`](type/WallPaper) | Previous wallpaper |
| <mark>new_value</mark> | [`WallPaper`](type/WallPaper) | New wallpaper |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeWallpaper(
	prev_value : $client->wallPaper(
		id : 1705791998461664265,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 4072055816641383897,
		slug : 'wUlpPtvNGgms8qYI',
		document : $client->documentEmpty(
			id : -5910137171880818649,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 58,
			second_background_color : 45,
			third_background_color : 59,
			fourth_background_color : 63,
			intensity : 64,
			rotation : 26,
			emoticon : 'sPuMT5Xma6UWIc2g',
		),
	),
	new_value : $client->wallPaper(
		id : -6474033523415587936,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 4163273407335645112,
		slug : 'VI8o9HidgXOkNGRu',
		document : $client->documentEmpty(
			id : -7417545240265731936,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 30,
			second_background_color : 64,
			third_background_color : 100,
			fourth_background_color : 15,
			intensity : 35,
			rotation : 85,
			emoticon : 'vGZRO3JHM9fLyWl5',
		),
	),
);
```