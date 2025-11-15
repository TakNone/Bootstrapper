# inputMediaVenue

**Description** : *Can be used to send a venue geolocation*

**Layer** : 218

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
	title : 'shBy2azkbHKLfoFe',
	address : 'msdk19B2SjC7qQNO',
	provider : 'ERtMXv4k3jbdP1ez',
	venue_id : '04Vl8B7N2XUKdzEI',
	venue_type : '7E3yY0Rw4usCiI8H',
);
```