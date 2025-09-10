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
		x : 493713.0546875,
		y : 1640106.7236328125,
		w : -178453.1337890625,
		h : -593320.69921875,
		rotation : -2056474.259765625,
		radius : -1456814.0400390625,
	),
	url : 'https://docs.liveproto.dev',
);
```