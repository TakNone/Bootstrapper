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
		x : 521870.3193359375,
		y : 695343.8203125,
		w : -1375580.1767578125,
		h : -954557.8046875,
		rotation : 1847842.75390625,
		radius : 10030.5869140625,
	),
	slug : 'ngahSXCAstP8pdKQ',
);
```