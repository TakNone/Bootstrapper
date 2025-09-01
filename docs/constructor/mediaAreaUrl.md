# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 214

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
		x : -718459.02734375,
		y : 722484.849609375,
		w : -922747.7392578125,
		h : -1388456.658203125,
		rotation : -1500186.4169921875,
		radius : -953494.9423828125,
	),
	url : 'https://docs.liveproto.dev',
);
```