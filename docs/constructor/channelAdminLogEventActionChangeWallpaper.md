# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 216

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
		id : -5919558640612932502,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -8441253977276640240,
		slug : 'hCGMiIzHf4ZSQdxm',
		document : $client->documentEmpty(
			id : 4580628589449039832,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 96,
			second_background_color : 37,
			third_background_color : 7,
			fourth_background_color : 13,
			intensity : 86,
			rotation : 62,
			emoticon : 'gcam5kKjQyNwTU1Z',
		),
	),
	new_value : $client->wallPaper(
		id : 4051465510551981739,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -7434012149767518526,
		slug : 'XtSxuJTV54WPoEd0',
		document : $client->documentEmpty(
			id : -8272870113513726280,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 59,
			second_background_color : 75,
			third_background_color : 77,
			fourth_background_color : 45,
			intensity : 65,
			rotation : 52,
			emoticon : 'mWGdBVXEniZyzbA4',
		),
	),
);
```