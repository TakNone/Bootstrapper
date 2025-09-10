# mediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 214

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
		x : 1767387.9091796875,
		y : -1161486.2490234375,
		w : 1250249.4130859375,
		h : -81320.20703125,
		rotation : -682574.478515625,
		radius : -952819.8525390625,
	),
	geo : $client->geoPointEmpty(),
	title : '7FPcGqIuARjWTChw',
	address : '2rcxNCkGRTi7DeXW',
	provider : 'AtugBmOacoqn2VGZ',
	venue_id : 'ZPkfFx2NQ5CbSjt6',
	venue_type : 'nykLCi1pAlVgRqvf',
);
```