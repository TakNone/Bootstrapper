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
		x : -974296.5908203125,
		y : -2057444.205078125,
		w : 1079129.9609375,
		h : -70164.7158203125,
		rotation : 1681479.14453125,
		radius : 894334.0693359375,
	),
	slug : 'w9jYsEGhX6WunkAV',
);
```