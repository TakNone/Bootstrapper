# mediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 222

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
		x : 1861255.1298828125,
		y : -1487244.794921875,
		w : 427924.2958984375,
		h : -634419.03515625,
		rotation : -554249.853515625,
		radius : 2081698.501953125,
	),
	geo : $client->geoPointEmpty(),
	title : 'LuKJzaH2ZMRODPbk',
	address : 'ybgxG2LcaOYNMH4u',
	provider : 'E4stmBR1DuWSqvMz',
	venue_id : 'YxXN3Lb2lOufMDkn',
	venue_type : '4n8hOksDwFgl2G7c',
);
```