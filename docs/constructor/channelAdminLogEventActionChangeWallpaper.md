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
		id : 6017929786933392576,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 5774723004170324426,
		slug : 'lzTG0F4C6PkjOiD5',
		document : $client->documentEmpty(
			id : 8544863803270690971,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 37,
			second_background_color : 9,
			third_background_color : 61,
			fourth_background_color : 57,
			intensity : 72,
			rotation : 68,
			emoticon : 'rcWJy12ewXxNjnvk',
		),
	),
	new_value : $client->wallPaper(
		id : -5291249221546602331,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -4035979529924935292,
		slug : 'VlEOKNr4gDYcd2UX',
		document : $client->documentEmpty(
			id : -1696599744531878628,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 3,
			second_background_color : 71,
			third_background_color : 8,
			fourth_background_color : 15,
			intensity : 66,
			rotation : 46,
			emoticon : 'XyTI31vheESzsMZY',
		),
	),
);
```