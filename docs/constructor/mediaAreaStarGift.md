# mediaAreaStarGift

**Layer** : 216

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
		x : -1643466.4697265625,
		y : -1321541.82421875,
		w : 1663683.1318359375,
		h : 805032.439453125,
		rotation : -528966.556640625,
		radius : -1550343.548828125,
	),
	slug : 'eAiMOfV3aNploqQg',
);
```