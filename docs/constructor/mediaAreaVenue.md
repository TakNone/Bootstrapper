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
		x : -367906.1611328125,
		y : 1348809.03515625,
		w : -917507.5263671875,
		h : 2064468.34765625,
		rotation : -858396.1025390625,
		radius : 1330260.57421875,
	),
	geo : $client->geoPointEmpty(),
	title : 'F6Y4uCoXtfaQTROc',
	address : 'mC08hYEigZRBMnTk',
	provider : 'a46GUq27R83hpHZC',
	venue_id : 'bx0lcq93dMuAiTsX',
	venue_type : 'qmdsKPVo4MwjzpI3',
);
```