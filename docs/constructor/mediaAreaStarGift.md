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
		x : -1540810.0380859375,
		y : 1268525.7626953125,
		w : 805450.1318359375,
		h : 1099914.3466796875,
		rotation : 1586841.2841796875,
		radius : 5047.1181640625,
	),
	slug : 'TjWEKglBzdv6MU9q',
);
```