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
		x : -1758381.5556640625,
		y : 1805336.7333984375,
		w : -286380.6240234375,
		h : 511787.9267578125,
		rotation : -1044416.388671875,
		radius : -45787.171875,
	),
	geo : $client->geoPointEmpty(),
	title : '06jLpe2aDoHnbgyA',
	address : '6mTj9gK0R7xpZBtJ',
	provider : 'dYQFbzBsnZUH7pu8',
	venue_id : 'v8YEwR7d6pIJHhFj',
	venue_type : 'ukCFWr9RUjzKl7vV',
);
```