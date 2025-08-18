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
		x : -1189117.001953125,
		y : 1774826.345703125,
		w : 1847138.8701171875,
		h : 633623.9365234375,
		rotation : 1383451.3408203125,
		radius : -1732477.8369140625,
	),
	slug : 'ZHDptPdQRjLSkYEz',
);
```