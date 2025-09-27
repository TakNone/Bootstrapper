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
		id : -7063197333337798782,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 3229600638519954025,
		slug : 'jM5RuD06yVmBS79Y',
		document : $client->documentEmpty(
			id : -6338409202915399168,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 66,
			second_background_color : 11,
			third_background_color : 81,
			fourth_background_color : 67,
			intensity : 89,
			rotation : 2,
			emoticon : 'N4fcGuDrdVYep8vb',
		),
	),
	new_value : $client->wallPaper(
		id : 4540016011578946481,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -9164827839178955746,
		slug : 'XLDVOhIs0aWHMAlw',
		document : $client->documentEmpty(
			id : -5852076817127406290,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 33,
			second_background_color : 39,
			third_background_color : 23,
			fourth_background_color : 99,
			intensity : 67,
			rotation : 62,
			emoticon : 'UOjqpANma1vTJol6',
		),
	),
);
```