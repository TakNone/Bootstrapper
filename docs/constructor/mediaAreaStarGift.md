# mediaAreaStarGift

**Description** : *Represents a collectible gift &raquo;*

**Layer** : 227

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
		x : 438114.8837890625,
		y : -989452.3466796875,
		w : -355473.40625,
		h : -293395.853515625,
		rotation : -1902338.96875,
		radius : -1343073.857421875,
	),
	slug : 'Bh8e3ZDPCtnsaHWL',
);
```