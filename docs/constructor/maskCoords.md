# maskCoords

**Description** : *Position on a photo where a mask should be placed when attaching stickers to media &raquo;*

**Layer** : 214

```tl
maskCoords#aed6dbb2 n:int x:double y:double zoom:double = MaskCoords;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>n</mark> | [`int`](type/int) | Part of the face, relative to which the mask should be placed |
| <mark>x</mark> | [`double`](type/double) | Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. (For example, -1.0 will place the mask just to the left of the default mask position) |
| <mark>y</mark> | [`double`](type/double) | Shift by Y-axis measured in widths of the mask scaled to the face size, from left to right. (For example, -1.0 will place the mask just below the default mask position) |
| <mark>zoom</mark> | [`double`](type/double) | Mask scaling coefficient. (For example, 2.0 means a doubled size) |

---

## Type

[MaskCoords](type/MaskCoords)

---

## Example

```php
$maskCoords = $client->maskCoords(
	n : 31,
	x : -504658.0751953125,
	y : 607467.2744140625,
	zoom : -1020469.609375,
);
```