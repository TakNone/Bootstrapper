# mediaAreaStarGift

**Description** : *Represents a collectible gift &raquo;*

**Layer** : 233

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
		x : -1248367.587890625,
		y : 102239.33984375,
		w : 1540395.4990234375,
		h : -115280.890625,
		rotation : -422753.4296875,
		radius : -49798.03125,
	),
	slug : '6rWfAM9XRsw50bzn',
);
```