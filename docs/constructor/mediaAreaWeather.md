# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 218

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
		x : 294996.2841796875,
		y : -1631915.3662109375,
		w : 935334.7138671875,
		h : -827689.1025390625,
		rotation : 2059448.75,
		radius : 1657362.7978515625,
	),
	emoji : 'v4ehaG2dSyA5VjiX',
	temperature_c : -1028978.716796875,
	color : 22,
);
```