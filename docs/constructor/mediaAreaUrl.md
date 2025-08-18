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
		x : -1668218.14453125,
		y : -1422429.78515625,
		w : 1334756.2080078125,
		h : -73448.953125,
		rotation : 1161345.060546875,
		radius : -897066.494140625,
	),
	url : 'https://docs.liveproto.dev',
);
```