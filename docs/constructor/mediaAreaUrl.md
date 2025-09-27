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
		x : 1112225.5244140625,
		y : 1833117.14453125,
		w : -1133186.0771484375,
		h : 321505.3701171875,
		rotation : 1422394.73046875,
		radius : 328687.3115234375,
	),
	url : 'https://docs.liveproto.dev',
);
```