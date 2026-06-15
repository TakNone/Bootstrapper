# mediaAreaUrl

**Description** : *Represents a URL media area*

**Layer** : 227

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
		x : -472738.73828125,
		y : 1552191.5537109375,
		w : -723743.0732421875,
		h : -78794.4609375,
		rotation : -441039.66015625,
		radius : -1983940.724609375,
	),
	url : 'https://docs.liveproto.dev',
);
```