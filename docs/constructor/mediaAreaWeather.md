# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 211

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
		x : -1712846.7431640625,
		y : -88136.92578125,
		w : -1416185.638671875,
		h : -95368.8623046875,
		rotation : -997102.7294921875,
		radius : -980945.4599609375,
	),
	emoji : 'IRLQtqr7OoelCFiw',
	temperature_c : 2033770.9140625,
	color : 29,
);
```