# inputMediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 227

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
		x : 1098887.0341796875,
		y : 1805558.1591796875,
		w : -911984.509765625,
		h : -1725168.234375,
		rotation : -1971570.7451171875,
		radius : 1467027.9375,
	),
	query_id : 8807342301326131137,
	result_id : 'yd8Q0rFczWMAZNKH',
);
```