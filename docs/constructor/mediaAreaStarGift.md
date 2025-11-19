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
		x : -468257.533203125,
		y : 496001.849609375,
		w : -1217030.708984375,
		h : -1805425.6748046875,
		rotation : 627907.0986328125,
		radius : -2082780.15625,
	),
	slug : 'gMXe0yt7LFmshkJv',
);
```