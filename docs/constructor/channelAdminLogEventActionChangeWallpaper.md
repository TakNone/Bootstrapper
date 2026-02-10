# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 222

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
		id : -3591887820654356037,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -6265064624615118180,
		slug : 'MfuO2C1sYazH74We',
		document : $client->documentEmpty(
			id : 6396076413909290128,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 90,
			second_background_color : 24,
			third_background_color : 13,
			fourth_background_color : 4,
			intensity : 0,
			rotation : 56,
			emoticon : '6NYKgM0nz8PWibAL',
		),
	),
	new_value : $client->wallPaper(
		id : -5366212627933603239,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -2074745822582602147,
		slug : 'U5uhV4n0NgGrvCXf',
		document : $client->documentEmpty(
			id : 4659943489387595098,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 81,
			second_background_color : 99,
			third_background_color : 56,
			fourth_background_color : 65,
			intensity : 100,
			rotation : 88,
			emoticon : '20sezDQmSMlF6wyf',
		),
	),
);
```