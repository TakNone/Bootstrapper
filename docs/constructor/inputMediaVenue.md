# inputMediaVenue

**Description** : *Can be used to send a venue geolocation*

**Layer** : 214

```tl
inputMediaVenue#c13d1c11 geo_point:InputGeoPoint title:string address:string provider:string venue_id:string venue_type:string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | Geolocation |
| <mark>title</mark> | [`string`](type/string) | Venue name |
| <mark>address</mark> | [`string`](type/string) | Physical address of the venue |
| <mark>provider</mark> | [`string`](type/string) | Venue provider: currently only "foursquare" and "gplaces" (Google Places) need to be supported |
| <mark>venue_id</mark> | [`string`](type/string) | Venue ID in the provider's database |
| <mark>venue_type</mark> | [`string`](type/string) | Venue type in the provider's database |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaVenue(
	geo_point : $client->inputGeoPointEmpty(),
	title : 'f6YPyv8FJalz7SgL',
	address : 'I1Yg4JnVbtZUsiml',
	provider : '8kqf0AON9DW7JxCs',
	venue_id : 'HXl28kehEONGQR0x',
	venue_type : 'pYIoLke4ArMQHNU8',
);
```