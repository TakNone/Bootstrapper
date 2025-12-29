# inputMediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 218

```tl
inputMediaAreaVenue#b282217f coordinates:MediaAreaCoordinates query_id:long result_id:string = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the location sticker on top of the story media |
| <mark>query_id</mark> | [`long`](type/long) | The query_id from messages.botResults, see here » for more info |
| <mark>result_id</mark> | [`string`](type/string) | The id of the chosen result, see here » for more info |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->inputMediaAreaVenue(
	coordinates : $client->mediaAreaCoordinates(
		x : -732992.10546875,
		y : -737050.4208984375,
		w : 1837910.2646484375,
		h : 955302.4541015625,
		rotation : -98959.6123046875,
		radius : -1618671.2353515625,
	),
	query_id : 5367021037619597872,
	result_id : 'yJVZwugsIMRmXC3G',
);
```