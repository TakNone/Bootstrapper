# mediaAreaStarGift

**Description** : *Represents a collectible gift &raquo;*

**Layer** : 216

```tl
mediaAreaStarGift#5787686d coordinates:MediaAreaCoordinates slug:string = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | Coordinates of the media area |
| <mark>slug</mark> | [`string`](type/string) | slug from starGiftUnique.slug, that can be resolved as specified here » |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaStarGift(
	coordinates : $client->mediaAreaCoordinates(
		x : -572149.6953125,
		y : 1441865.775390625,
		w : -1510405.51171875,
		h : 1721229.9365234375,
		rotation : 1982765.205078125,
		radius : 1620233.3349609375,
	),
	slug : 'D2CHYrB4IimQcML3',
);
```