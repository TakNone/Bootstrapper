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
		x : -1713415.28515625,
		y : -155327.564453125,
		w : -202432.82421875,
		h : -145540.8876953125,
		rotation : 496490.9013671875,
		radius : 1498031.7783203125,
	),
	emoji : 'iOCom3XxK8S17RGb',
	temperature_c : -1149266.611328125,
	color : 4,
);
```