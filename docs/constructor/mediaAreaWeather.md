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
		x : 1474054.779296875,
		y : -1416330.1279296875,
		w : -1287998.6904296875,
		h : -1725517.146484375,
		rotation : -1098821.2197265625,
		radius : 1988756.107421875,
	),
	emoji : 'kCW1h6H0gUrb2lXq',
	temperature_c : 1722634.216796875,
	color : 56,
);
```