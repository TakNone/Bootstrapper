# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 225

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
		id : 3373461631367272279,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 4432324939049923377,
		slug : 'MX6ihnjHKJZTsIRE',
		document : $client->documentEmpty(
			id : -2633221958366293481,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 40,
			second_background_color : 51,
			third_background_color : 66,
			fourth_background_color : 38,
			intensity : 32,
			rotation : 85,
			emoticon : 'notI1NRwzk4i3yOM',
		),
	),
	new_value : $client->wallPaper(
		id : -8738778908056121756,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 7276301248878487158,
		slug : 'Gcx5qfpuSwJNAbmk',
		document : $client->documentEmpty(
			id : 2389904955637331000,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 77,
			second_background_color : 78,
			third_background_color : 95,
			fourth_background_color : 98,
			intensity : 74,
			rotation : 64,
			emoticon : '4QB7qcd5th6wagRb',
		),
	),
);
```