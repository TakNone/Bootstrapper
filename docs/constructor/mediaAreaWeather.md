# mediaAreaWeather

**Description** : *Represents a weather widget »*

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
		x : -681001.0029296875,
		y : 39007.29296875,
		w : 1395927.4833984375,
		h : -33129.283203125,
		rotation : -1516544.1083984375,
		radius : -1205890.5166015625,
	),
	emoji : 'ov3g5eCEL4R1pVqh',
	temperature_c : 349777.357421875,
	color : 79,
);
```