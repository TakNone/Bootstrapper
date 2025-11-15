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
		x : 1380683.013671875,
		y : 342777.908203125,
		w : -611334.3642578125,
		h : 376279.080078125,
		rotation : 1438717.3935546875,
		radius : -1429984.8408203125,
	),
	emoji : 'mdYR5HEGzZ0kSi8n',
	temperature_c : -124501.544921875,
	color : 72,
);
```