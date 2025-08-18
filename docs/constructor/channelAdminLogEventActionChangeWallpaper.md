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
		id : 4629930701885491037,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 4796849785661698751,
		slug : 'KmACRJyiL5b3N7su',
		document : $client->documentEmpty(
			id : -9222535524784279142,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 37,
			second_background_color : 66,
			third_background_color : 33,
			fourth_background_color : 38,
			intensity : 96,
			rotation : 6,
			emoticon : '8FWvjs5YtdfXBNER',
		),
	),
	new_value : $client->wallPaper(
		id : 2332573437324945506,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -1183010192323661888,
		slug : 'P0jVL84tR2c9kEin',
		document : $client->documentEmpty(
			id : 8829068698560688859,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 99,
			second_background_color : 9,
			third_background_color : 28,
			fourth_background_color : 49,
			intensity : 57,
			rotation : 14,
			emoticon : 'VWTQdY7rpC6bJPhk',
		),
	),
);
```