# mediaAreaVenue

**Description** : *Represents a location tag attached to a story, with additional venue information*

**Layer** : 229

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
		x : 2082676.6943359375,
		y : -1210440.98828125,
		w : -877778.5048828125,
		h : 534676.9716796875,
		rotation : 1638375.3798828125,
		radius : -1748410.357421875,
	),
	geo : $client->geoPointEmpty(),
	title : 'AFMf8OD6I5Tn7cQ4',
	address : 'vxEzkfQm93rOtiRP',
	provider : '3ucwpgL9P4GzmOkB',
	venue_id : 'b63mXOnlGujKvi9F',
	venue_type : 'kh53Hx7ApF4PoEgB',
);
```