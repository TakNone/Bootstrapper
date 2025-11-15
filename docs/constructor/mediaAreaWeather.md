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
		x : 1086961.9736328125,
		y : -273868.9501953125,
		w : -42690.234375,
		h : 1699551.263671875,
		rotation : -98387.9482421875,
		radius : 359043.3203125,
	),
	emoji : 'FN2fVb6DzIldh87T',
	temperature_c : -1524127.7451171875,
	color : 39,
);
```