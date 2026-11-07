# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 233

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
		x : 628017.6376953125,
		y : 593785.1865234375,
		w : -1803437.1806640625,
		h : -1694946.60546875,
		rotation : -542220.5205078125,
		radius : 448249.6611328125,
	),
	url : 'https://docs.liveproto.dev',
);
```