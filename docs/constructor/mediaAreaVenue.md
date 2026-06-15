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
		x : -222054.69140625,
		y : -1439333.4501953125,
		w : -945722.3310546875,
		h : -1771433.353515625,
		rotation : -255324.8447265625,
		radius : -433485.7412109375,
	),
	geo : $client->geoPointEmpty(),
	title : 'z1mk3EtU0rOxfuQb',
	address : 'C1omsHcGwhOiYrkS',
	provider : 'BOnh4EXAx0yLl83e',
	venue_id : 'cD2hMCZg4NjqtbYk',
	venue_type : 'IoAVBHF4GxMhwkTr',
);
```