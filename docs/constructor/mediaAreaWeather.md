# mediaAreaWeather

**Description** : *Represents a weather widget &raquo;*

**Layer** : 214

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
		x : 1319409.298828125,
		y : -458573.5322265625,
		w : -1635019.4794921875,
		h : -2066189.7373046875,
		rotation : -1736776.9814453125,
		radius : 1582201.916015625,
	),
	emoji : 'VGsnc0Eur1Jaf8CM',
	temperature_c : 580140.046875,
	color : 57,
);
```