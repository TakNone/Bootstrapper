# mediaAreaGeoPoint

**Description** : *Represents a geolocation tag attached to a story*

**Layer** : 229

```tl
mediaAreaGeoPoint#cad5452d flags:# coordinates:MediaAreaCoordinates geo:GeoPoint address:flags.0?GeoPointAddress = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		x : -1109011.3974609375,
		y : 1828929.1728515625,
		w : 1915206.783203125,
		h : 1966843.310546875,
		rotation : -2072796.314453125,
		radius : -144433.78515625,
	),
	geo : $client->geoPointEmpty(),
	address : $client->geoPointAddress(
		country_iso2 : 'L23vwoe70G6dAmx9',
		state : 'g2tGi0HlfX4kW5EY',
		city : '4iTfUEa7wCgpj6Ds',
		street : '3drVWEG6I1UlJBZf',
	),
);
```