# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 211

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
		id : -6865279260195767007,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -924518739034370700,
		slug : 'Nb42TXREqvdho6wp',
		document : $client->documentEmpty(
			id : 7511803345774344603,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 8,
			second_background_color : 8,
			third_background_color : 67,
			fourth_background_color : 71,
			intensity : 64,
			rotation : 93,
			emoticon : 'zXLKTyhAJOVYcDpP',
		),
	),
	new_value : $client->wallPaper(
		id : -5215582144441709952,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 1859337245969772555,
		slug : 'bZ84cyuv3dVDJqTo',
		document : $client->documentEmpty(
			id : -9171940945175862361,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 39,
			second_background_color : 86,
			third_background_color : 10,
			fourth_background_color : 15,
			intensity : 89,
			rotation : 26,
			emoticon : 'Cem0PMdFu5LTXU8b',
		),
	),
);
```