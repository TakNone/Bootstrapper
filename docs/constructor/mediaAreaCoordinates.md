# mediaAreaCoordinates

**Description** : *Coordinates and size of a clicable rectangular area on top of a story*

**Layer** : 211

```tl
mediaAreaCoordinates#cfc9e002 flags:# x:double y:double w:double h:double rotation:double radius:flags.0?double = MediaAreaCoordinates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>x</mark> | [`double`](type/double) | The abscissa of the rectangle's center, as a percentage of the media width (0-100) |
| <mark>y</mark> | [`double`](type/double) | The ordinate of the rectangle's center, as a percentage of the media height (0-100) |
| <mark>w</mark> | [`double`](type/double) | The width of the rectangle, as a percentage of the media width (0-100) |
| <mark>h</mark> | [`double`](type/double) | The height of the rectangle, as a percentage of the media height (0-100) |
| <mark>rotation</mark> | [`double`](type/double) | Clockwise rotation angle of the rectangle, in degrees (0-360) |
| **radius** | [`flags.0?double`](type/double) | The radius of the rectangle corner rounding, as a percentage of the media width |

---

## Type

[MediaAreaCoordinates](type/MediaAreaCoordinates)

---

## Example

```php
$mediaAreaCoordinates = $client->mediaAreaCoordinates(
	x : 1562569.3955078125,
	y : -1264934.498046875,
	w : -2042485.373046875,
	h : 76229.4658203125,
	rotation : -1451498.017578125,
	radius : -52907.2373046875,
);
```