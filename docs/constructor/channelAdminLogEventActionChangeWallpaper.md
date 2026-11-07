# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 229

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
		id : 2785021003730956236,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 4198549259764077895,
		slug : 'CoGmte80WUdPSQ29',
		document : $client->documentEmpty(
			id : -5210556472498962666,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 31,
			second_background_color : 86,
			third_background_color : 8,
			fourth_background_color : 48,
			intensity : 95,
			rotation : 46,
			emoticon : 'xTzuwmqyHer0tDac',
		),
	),
	new_value : $client->wallPaper(
		id : 2954381290061790663,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 8979474604503843632,
		slug : 'gU4sukKRGaP5i3p9',
		document : $client->documentEmpty(
			id : 6732855326934984676,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 28,
			second_background_color : 86,
			third_background_color : 0,
			fourth_background_color : 42,
			intensity : 97,
			rotation : 79,
			emoticon : 'RNqhcStCmxjLu5XD',
		),
	),
);
```