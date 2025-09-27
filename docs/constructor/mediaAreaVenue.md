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
		x : -1927619.5830078125,
		y : -1865264.7412109375,
		w : -1972069.4033203125,
		h : -1031801.8837890625,
		rotation : 368660.6708984375,
		radius : 2053385.8349609375,
	),
	geo : $client->geoPointEmpty(),
	title : 'JMdkVoLIZ2W5xuNh',
	address : 'Du1PEoFGaLiMK572',
	provider : 'uFKrHe3YOR5mDzLk',
	venue_id : 'DKqMYZxnIawmNt59',
	venue_type : 'jqTbOCJBLXAKNGcu',
);
```