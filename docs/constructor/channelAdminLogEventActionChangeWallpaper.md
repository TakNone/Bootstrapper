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
		id : 3870145820983099692,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 59701523480888732,
		slug : 'CqJiOMhAYfmdn4VU',
		document : $client->documentEmpty(
			id : 7994967449995583665,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 46,
			second_background_color : 87,
			third_background_color : 62,
			fourth_background_color : 37,
			intensity : 60,
			rotation : 100,
			emoticon : 'xbwnC3gEAiO8XFe0',
		),
	),
	new_value : $client->wallPaper(
		id : -3238999641137477356,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -8075161117994283561,
		slug : 'SM27iQg1I6CKUuw0',
		document : $client->documentEmpty(
			id : -8528285065577907623,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 100,
			second_background_color : 70,
			third_background_color : 19,
			fourth_background_color : 20,
			intensity : 7,
			rotation : 8,
			emoticon : '9yausqHoikKmtDe3',
		),
	),
);
```