# mediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 216

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
		x : -396607.68359375,
		y : -2082168.408203125,
		w : -414507.224609375,
		h : -297548.2197265625,
		rotation : 1024155.3203125,
		radius : -175805.1484375,
	),
	geo : $client->geoPointEmpty(),
	title : 'lnADfW5X9F3GmKPC',
	address : 'iS2XUspQL95h4zEf',
	provider : 'Zq3SM7OgIc9XpvrV',
	venue_id : 'gIkYJMzxDTF3SbAa',
	venue_type : 'kgthjHBUPGFlEK6R',
);
```