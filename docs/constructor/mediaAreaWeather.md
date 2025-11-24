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
		x : 1595215.6591796875,
		y : 1686822.732421875,
		w : 1907952.87109375,
		h : -1327048.4912109375,
		rotation : 1722561.1826171875,
		radius : -834493.58203125,
	),
	emoji : 'xpngwUfCEkFM1Jzm',
	temperature_c : 1440783.5087890625,
	color : 88,
);
```