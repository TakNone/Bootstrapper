# channelAdminLogEventActionChangeWallpaper

**Description** : *The wallpaper was changed*

**Layer** : 233

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
		id : -8517146476209621480,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 8572198635132219762,
		slug : 'A9KfQnbOrhH04xXv',
		document : $client->documentEmpty(
			id : 1623343718591437138,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 97,
			second_background_color : 50,
			third_background_color : 67,
			fourth_background_color : 18,
			intensity : 72,
			rotation : 88,
			emoticon : 'o7DxCBwh8n5G124A',
		),
	),
	new_value : $client->wallPaper(
		id : -5269898544449378743,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 7751081511713376936,
		slug : 'Foy4Ge9UPHq6lpsr',
		document : $client->documentEmpty(
			id : -1732798331217794977,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 42,
			second_background_color : 0,
			third_background_color : 58,
			fourth_background_color : 70,
			intensity : 12,
			rotation : 100,
			emoticon : 'HINiFBpeK3dVucg9',
		),
	),
);
```