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
		x : -265272.884765625,
		y : -267729.2412109375,
		w : -1806160.3564453125,
		h : 1206384.90234375,
		rotation : 1988245.953125,
		radius : -1289568.755859375,
	),
	emoji : 't08TMQ94Px1Se6vb',
	temperature_c : -826071.9697265625,
	color : 8,
);
```