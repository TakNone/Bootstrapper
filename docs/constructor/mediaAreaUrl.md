# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 225

```tl
mediaAreaUrl#37381085 coordinates:MediaAreaCoordinates url:string = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the URL button on top of the story media |
| <mark>url</mark> | [`string`](type/string) | URL to open when clicked |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaUrl(
	coordinates : $client->mediaAreaCoordinates(
		x : -1122819.8359375,
		y : 260576.1806640625,
		w : 1305497.1552734375,
		h : -389989.3740234375,
		rotation : 857013.306640625,
		radius : -2066613.7822265625,
	),
	url : 'https://docs.liveproto.dev',
);
```