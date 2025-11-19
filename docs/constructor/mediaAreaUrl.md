# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 218

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
		x : 514172.3154296875,
		y : -560784.84375,
		w : 646150.55078125,
		h : 1818297.078125,
		rotation : -1749484.8671875,
		radius : 598848.7529296875,
	),
	url : 'https://docs.liveproto.dev',
);
```