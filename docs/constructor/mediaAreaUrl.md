# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 222

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
		x : -824642.1982421875,
		y : 1594883.7685546875,
		w : 176647.2666015625,
		h : -286297.828125,
		rotation : 1511693.6513671875,
		radius : -1122258.5009765625,
	),
	url : 'https://docs.liveproto.dev',
);
```