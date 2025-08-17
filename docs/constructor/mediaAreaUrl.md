# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 211

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
		x : -2007159.7431640625,
		y : -459288.7119140625,
		w : -376665.283203125,
		h : 524149.9453125,
		rotation : -757195.744140625,
		radius : -1411860.3583984375,
	),
	url : 'https://docs.liveproto.dev',
);
```