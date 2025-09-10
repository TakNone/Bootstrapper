# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 214

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
		id : -6162973664953658728,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 5330728113251702139,
		slug : 'NW5zaly2ivRAgxIo',
		document : $client->documentEmpty(
			id : 1130323907455963477,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 62,
			second_background_color : 97,
			third_background_color : 78,
			fourth_background_color : 47,
			intensity : 74,
			rotation : 15,
			emoticon : 't3ZrGaTDhHdKjAOc',
		),
	),
	new_value : $client->wallPaper(
		id : 5426101863791492731,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -8455923906913362147,
		slug : 'hmsGnrOBSNFLjfdu',
		document : $client->documentEmpty(
			id : -3178938816106208419,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 57,
			second_background_color : 83,
			third_background_color : 95,
			fourth_background_color : 23,
			intensity : 96,
			rotation : 95,
			emoticon : 'K7CYwFpO2oyIkg9T',
		),
	),
);
```