# inputMediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 216

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
		x : 2070671.1982421875,
		y : -1805707.0234375,
		w : 753721.8486328125,
		h : -582798.7900390625,
		rotation : 1943110.5712890625,
		radius : -1418018.39453125,
	),
	query_id : -4406659003978859867,
	result_id : 'z6PkR3Vq7Obcs1o0',
);
```