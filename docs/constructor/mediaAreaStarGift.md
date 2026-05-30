# mediaAreaStarGift

**Description** : *Represents a collectible gift &raquo;*

**Layer** : 225

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
		x : 724154.1220703125,
		y : 1912148.80078125,
		w : 1099567.5390625,
		h : 967848.6650390625,
		rotation : 384245.359375,
		radius : 173152.34765625,
	),
	slug : 'wKbfeNU0cE37Giga',
);
```