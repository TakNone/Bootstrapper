# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 227

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
		x : -733345.705078125,
		y : -1756747.0673828125,
		w : 147135.5068359375,
		h : -653783.279296875,
		rotation : -1813681.0341796875,
		radius : -1857043.48046875,
	),
	emoji : 'fXOT5hys8pgVaorL',
	temperature_c : -1186582.0927734375,
	color : 11,
);
```