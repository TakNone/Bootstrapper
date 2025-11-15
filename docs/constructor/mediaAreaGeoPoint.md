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
		x : -1354977.7060546875,
		y : -287531.4501953125,
		w : 226448.291015625,
		h : -1067682.2333984375,
		rotation : 1206065.81640625,
		radius : -312848.8759765625,
	),
	geo : $client->geoPointEmpty(),
	address : $client->geoPointAddress(
		country_iso2 : '7LY4RuVJ8fyw6xvM',
		state : '3UzifYGWhp4JakFc',
		city : '2DOntipCdXlISAuU',
		street : 'OA7DgoJtezrZvjWF',
	),
);
```