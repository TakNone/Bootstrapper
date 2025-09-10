# inputMediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 214

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
		x : -112717.0244140625,
		y : -1439221.1396484375,
		w : -1182198.0966796875,
		h : 799682.1494140625,
		rotation : -2086948.6142578125,
		radius : 280130.44140625,
	),
	query_id : -6544737687794841860,
	result_id : 'gSjY5qGbozfwHur8',
);
```