# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 222

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
		x : 815453.72265625,
		y : -2085848.9912109375,
		w : 1673809.294921875,
		h : -1566598.65625,
		rotation : 1780977.4384765625,
		radius : -2047971.6396484375,
	),
	emoji : 'cT3BFOYQu9JykzXd',
	temperature_c : 1062999.13671875,
	color : 5,
);
```