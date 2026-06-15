# mediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 227

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
		x : -124134.7451171875,
		y : 1370815.8896484375,
		w : -1276943.7060546875,
		h : 1882414.1240234375,
		rotation : -1058149.4873046875,
		radius : 1387008.0458984375,
	),
	geo : $client->geoPointEmpty(),
	title : 'z1VYFyreoOqU9NH5',
	address : 'uwSfXhN95LzeTFcB',
	provider : 'ZPe3rGKApxIj5Hfk',
	venue_id : 'F6KByxwzbIdesjmX',
	venue_type : 'SKj0WFDsnuLZfPxY',
);
```