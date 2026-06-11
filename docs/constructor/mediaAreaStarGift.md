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
		x : 543690.7373046875,
		y : -49428.2548828125,
		w : -1890692.513671875,
		h : -1420210.7099609375,
		rotation : -1624942.2470703125,
		radius : 157219.7138671875,
	),
	slug : 'hNM7jPV53L9Yscp2',
);
```