# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 225

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
		x : 1300557.6201171875,
		y : 1017113.5400390625,
		w : -322251.396484375,
		h : 1559587.8837890625,
		rotation : -1339358.0595703125,
		radius : -1073346.6259765625,
	),
	emoji : 'hUXERti6HSx4Ta5B',
	temperature_c : -1957392.232421875,
	color : 24,
);
```