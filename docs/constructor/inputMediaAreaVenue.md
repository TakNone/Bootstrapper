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
		x : 46391.1396484375,
		y : -1898499.4912109375,
		w : 1525431.1123046875,
		h : -661482.48828125,
		rotation : 1649975.7744140625,
		radius : 2016365.3623046875,
	),
	query_id : -9115363523410899887,
	result_id : 'K2R03w1W6nQuMxhD',
);
```