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
		id : -6460544745083249881,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 1005626550912539062,
		slug : 'zaG6xqyKwB9tP5iU',
		document : $client->documentEmpty(
			id : 4907515948644598567,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 58,
			second_background_color : 5,
			third_background_color : 84,
			fourth_background_color : 77,
			intensity : 1,
			rotation : 72,
			emoticon : 'dACOBMjnDkxIplur',
		),
	),
	new_value : $client->wallPaper(
		id : 6766756936524547089,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -2026609729240359729,
		slug : 'ei7IhtwVv9HR1BNs',
		document : $client->documentEmpty(
			id : -3888109457406310216,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 4,
			second_background_color : 57,
			third_background_color : 87,
			fourth_background_color : 6,
			intensity : 66,
			rotation : 91,
			emoticon : '2VZng3YQpmA6d8tl',
		),
	),
);
```