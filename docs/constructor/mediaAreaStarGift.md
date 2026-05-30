# mediaAreaStarGift

**Description** : *Represents a collectible gift &raquo;*

**Layer** : 222

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
		x : 412098.662109375,
		y : -688173.8662109375,
		w : 659235.37890625,
		h : 157611.6953125,
		rotation : -655203.9345703125,
		radius : -290029.7255859375,
	),
	slug : 'HbIvtdSTiOglu3hK',
);
```