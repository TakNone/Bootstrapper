# mediaAreaGeoPoint

**Description** : *Represents a geolocation tag attached to a story*

**Layer** : 216

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
		x : 497616.955078125,
		y : 1823022.8095703125,
		w : -740411.849609375,
		h : -1138265.2900390625,
		rotation : -1889881.54296875,
		radius : -1651352.625,
	),
	geo : $client->geoPointEmpty(),
	address : $client->geoPointAddress(
		country_iso2 : 'LsgHYX2a1IAzqCm3',
		state : '1dUpMhxwlLjYFI5Q',
		city : 'L7Fd0Xf9TPxOpmRS',
		street : 'IQVHpzmXfhie0YMD',
	),
);
```