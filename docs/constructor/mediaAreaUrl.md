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
		x : 1134223.6689453125,
		y : -490590.6279296875,
		w : 867193.49609375,
		h : 1421156.494140625,
		rotation : 710841.8388671875,
		radius : -164695.7841796875,
	),
	url : 'https://docs.liveproto.dev',
);
```