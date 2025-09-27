# mediaAreaStarGift

**Layer** : 214

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
		x : 904177.0908203125,
		y : 231193.3681640625,
		w : 83650.6611328125,
		h : -1315735.7333984375,
		rotation : -681681.830078125,
		radius : -1674078.3994140625,
	),
	slug : 'IOzygh8Sij4GHo0R',
);
```