# mediaAreaStarGift

**Description** : *Represents a collectible gift &raquo;*

**Layer** : 218

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
		x : 1210290.7001953125,
		y : 2002482.0771484375,
		w : -1644815.572265625,
		h : -312197.0419921875,
		rotation : 1743986.275390625,
		radius : -1670262.47265625,
	),
	slug : 'O5AywkcCWjIrGuQS',
);
```