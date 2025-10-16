# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 216

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
		x : -882078.0556640625,
		y : -175407.1953125,
		w : 1778224.884765625,
		h : 26557.435546875,
		rotation : 184013.677734375,
		radius : -1383622.4345703125,
	),
	url : 'https://docs.liveproto.dev',
);
```