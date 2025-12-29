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
		x : 832716.8232421875,
		y : -1211915.0888671875,
		w : -1894299.521484375,
		h : -680043.9521484375,
		rotation : -1097413.5234375,
		radius : -320105.51953125,
	),
	url : 'https://docs.liveproto.dev',
);
```