# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 229

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
		x : -449098.625,
		y : -1749053.5009765625,
		w : -1766391.056640625,
		h : 6808.36328125,
		rotation : 561559.7138671875,
		radius : -735609.5927734375,
	),
	url : 'https://docs.liveproto.dev',
);
```