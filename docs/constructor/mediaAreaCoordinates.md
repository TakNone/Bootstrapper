# mediaAreaCoordinates

**Description** : *Coordinates and size of a clickable rectangular area on top of a story*

**Layer** : 233

```tl
mediaAreaCoordinates#cfc9e002 flags:# x:double y:double w:double h:double rotation:double radius:flags.0?double = MediaAreaCoordinates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	x : 1305285.7119140625,
	y : -1841169.650390625,
	w : 1904847.9853515625,
	h : -605761.099609375,
	rotation : 661436.6357421875,
	radius : -788261.5625,
);
```