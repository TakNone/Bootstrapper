# mediaAreaStarGift

**Description** : *Represents a collectible gift &raquo;*

**Layer** : 229

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
		x : 1243443.859375,
		y : 1647550.7412109375,
		w : 3532.2099609375,
		h : -2066519.5537109375,
		rotation : -1745524.5576171875,
		radius : 1129183.8310546875,
	),
	slug : 'EWCJVHptwUMgrTaO',
);
```