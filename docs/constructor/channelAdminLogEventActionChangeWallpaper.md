# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 218

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
		id : -8434193487894314072,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 7613867692440329585,
		slug : 'wP1oy0OdpBVjTa9Y',
		document : $client->documentEmpty(
			id : -8222847849193589047,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 90,
			second_background_color : 63,
			third_background_color : 33,
			fourth_background_color : 22,
			intensity : 64,
			rotation : 77,
			emoticon : 'ux4BiEYptrbIc8AS',
		),
	),
	new_value : $client->wallPaper(
		id : -8574154328338839341,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 1974861928842107485,
		slug : 'kxQTY3GRvnAwmpIj',
		document : $client->documentEmpty(
			id : 1337539700534808171,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 34,
			second_background_color : 65,
			third_background_color : 72,
			fourth_background_color : 35,
			intensity : 47,
			rotation : 96,
			emoticon : 'M65v2u0XlmyqaCdr',
		),
	),
);
```