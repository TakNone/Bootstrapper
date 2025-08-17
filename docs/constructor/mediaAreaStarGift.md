# mediaAreaStarGift

**Layer** : 211

```tl
mediaAreaStarGift#5787686d coordinates:MediaAreaCoordinates slug:string = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaStarGift(
	coordinates : $client->mediaAreaCoordinates(
		x : 285983.16796875,
		y : 1348109.2021484375,
		w : -460340.767578125,
		h : 606469.8720703125,
		rotation : 1072286.8388671875,
		radius : -1599548.5615234375,
	),
	slug : 'Q3soJPh8ZLkfWpmB',
);
```