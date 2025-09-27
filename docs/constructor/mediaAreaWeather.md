# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 216

```tl
mediaAreaWeather#49a6549c coordinates:MediaAreaCoordinates emoji:string temperature_c:double color:int = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the widget on top of the story media |
| <mark>emoji</mark> | [`string`](type/string) | Weather emoji, should be rendered as an animated emoji |
| <mark>temperature_c</mark> | [`double`](type/double) | Temperature in degrees Celsius |
| <mark>color</mark> | [`int`](type/int) | ARGB background color |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaWeather(
	coordinates : $client->mediaAreaCoordinates(
		x : 711883.03125,
		y : -1531325.396484375,
		w : -1481011.064453125,
		h : -985561.689453125,
		rotation : 1731068.3642578125,
		radius : -1485687.638671875,
	),
	emoji : '5fsDVdQ2p3FzZUJu',
	temperature_c : -1727268.6396484375,
	color : 67,
);
```