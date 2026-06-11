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
		id : -1130372067825968497,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -8430734380951011897,
		slug : 'd6OAPxIbXi47h50a',
		document : $client->documentEmpty(
			id : -25509980368998447,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 76,
			second_background_color : 86,
			third_background_color : 49,
			fourth_background_color : 19,
			intensity : 98,
			rotation : 12,
			emoticon : 'ex3zNUCBhSHVY6fK',
		),
	),
	new_value : $client->wallPaper(
		id : 2107815149889005190,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 2630112773686293684,
		slug : '7hrSgBYcvNPfK3Lw',
		document : $client->documentEmpty(
			id : 3796083404717055600,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 69,
			second_background_color : 16,
			third_background_color : 64,
			fourth_background_color : 40,
			intensity : 77,
			rotation : 18,
			emoticon : '9UOWbJIpgfY6jB0M',
		),
	),
);
```