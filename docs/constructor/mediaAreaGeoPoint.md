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
		x : 1154901.8818359375,
		y : -44744.9462890625,
		w : -2022242.3447265625,
		h : 1217424.9296875,
		rotation : 574347.3505859375,
		radius : 1207170.765625,
	),
	geo : $client->geoPointEmpty(),
	address : $client->geoPointAddress(
		country_iso2 : 'QqJtMyK9HjEscVLN',
		state : 'CkIcGoLA5t64Nwfp',
		city : 'HdMaUrvhxJO6bXsR',
		street : 's95p8GISgCLVPw1R',
	),
);
```