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
		x : -1059954.0078125,
		y : 170413.353515625,
		w : -1377981.005859375,
		h : 52455.6513671875,
		rotation : 1318921.9560546875,
		radius : -459159.908203125,
	),
	url : 'https://docs.liveproto.dev',
);
```