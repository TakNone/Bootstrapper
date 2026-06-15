# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 227

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
		id : -4141987719329850083,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 5536777114078705079,
		slug : 'qtXhQjd1UbsFWuyL',
		document : $client->documentEmpty(
			id : 6480351763274276557,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 58,
			second_background_color : 41,
			third_background_color : 85,
			fourth_background_color : 86,
			intensity : 94,
			rotation : 98,
			emoticon : 'W21uadxXUSORtB7i',
		),
	),
	new_value : $client->wallPaper(
		id : 4906703865754812225,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 3451905902537393841,
		slug : 'Q9KvRjHIEDGofzZq',
		document : $client->documentEmpty(
			id : -1556612492680693420,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 65,
			second_background_color : 16,
			third_background_color : 54,
			fourth_background_color : 92,
			intensity : 30,
			rotation : 82,
			emoticon : 'LUMH5R8ubY6mVBxP',
		),
	),
);
```