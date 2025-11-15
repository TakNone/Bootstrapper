# mediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 218

```tl
mediaAreaVenue#be82db9c coordinates:MediaAreaCoordinates geo:GeoPoint title:string address:string provider:string venue_id:string venue_type:string = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the location sticker on top of the story media |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | Coordinates of the venue |
| <mark>title</mark> | [`string`](type/string) | Venue name |
| <mark>address</mark> | [`string`](type/string) | Address |
| <mark>provider</mark> | [`string`](type/string) | Venue provider: currently only "foursquare" needs to be supported |
| <mark>venue_id</mark> | [`string`](type/string) | Venue ID in the provider's database |
| <mark>venue_type</mark> | [`string`](type/string) | Venue type in the provider's database |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaVenue(
	coordinates : $client->mediaAreaCoordinates(
		x : -1036633.0263671875,
		y : 1055174.1591796875,
		w : 654663.9716796875,
		h : 1823959.466796875,
		rotation : -1626153.41796875,
		radius : -381190.1533203125,
	),
	geo : $client->geoPointEmpty(),
	title : 'PyjtUfCkXl2B5uNb',
	address : 'N6Z5QhMXRnw1qeCo',
	provider : 'B3clLWZjYsGaPp7E',
	venue_id : 'kMOIHzSVCKq64onj',
	venue_type : '8YKBhRlfDSWpv67E',
);
```