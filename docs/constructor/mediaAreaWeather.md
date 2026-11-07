# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 233

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
		x : 1751283.65625,
		y : 437951.1923828125,
		w : -286785.0234375,
		h : -352032.9404296875,
		rotation : 1364655.916015625,
		radius : -20925.5498046875,
	),
	emoji : 'qewLoF2TfsjDJrMk',
	temperature_c : 1725275.09765625,
	color : 4,
);
```