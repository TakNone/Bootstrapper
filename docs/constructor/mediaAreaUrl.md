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
		x : 874882.978515625,
		y : 298628.90234375,
		w : 409188.2763671875,
		h : 139741.9892578125,
		rotation : -1684951.4560546875,
		radius : -1996622.755859375,
	),
	url : 'https://docs.liveproto.dev',
);
```