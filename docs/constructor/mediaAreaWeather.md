# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 229

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
		x : -90643.4130859375,
		y : -763281.876953125,
		w : 780373.7587890625,
		h : 1399085.92578125,
		rotation : 369349.10546875,
		radius : 1755225.1171875,
	),
	emoji : '8le6GiUWm3IkhVDc',
	temperature_c : 162615.4052734375,
	color : 56,
);
```