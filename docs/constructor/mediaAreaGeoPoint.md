# mediaAreaGeoPoint

**Description** : *Represents a geolocation tag attached to a story*

**Layer** : 218

```tl
mediaAreaGeoPoint#cad5452d flags:# coordinates:MediaAreaCoordinates geo:GeoPoint address:flags.0?GeoPointAddress = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and position of the media area corresponding to the location sticker on top of the story media |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | Coordinates of the geolocation tag |
| **address** | [`flags.0?GeoPointAddress`](type/GeoPointAddress) | Optional textual representation of the address |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaGeoPoint(
	coordinates : $client->mediaAreaCoordinates(
		x : 1478873.8720703125,
		y : -571328.8291015625,
		w : 907725.498046875,
		h : -82833.6220703125,
		rotation : -1411056.71484375,
		radius : 1514161.3271484375,
	),
	geo : $client->geoPointEmpty(),
	address : $client->geoPointAddress(
		country_iso2 : '13iYBko9xDZFWaMy',
		state : 'KHdXIaYr6R5PuZhC',
		city : 'DIh68XHi1ozfZSpg',
		street : 'LS5hjIFJGCZDo9XV',
	),
);
```