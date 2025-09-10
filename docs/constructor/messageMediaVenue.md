# messageMediaVenue

**Description** : *Venue*

**Layer** : 214

```tl
messageMediaVenue#2ec0533f geo:GeoPoint title:string address:string provider:string venue_id:string venue_type:string = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | Geolocation of venue |
| <mark>title</mark> | [`string`](type/string) | Venue name |
| <mark>address</mark> | [`string`](type/string) | Address |
| <mark>provider</mark> | [`string`](type/string) | Venue provider: currently only "foursquare" and "gplaces" (Google Places) need to be supported |
| <mark>venue_id</mark> | [`string`](type/string) | Venue ID in the provider's database |
| <mark>venue_type</mark> | [`string`](type/string) | Venue type in the provider's database |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaVenue(
	geo : $client->geoPointEmpty(),
	title : 'PhOd6UsGQkFZy4uK',
	address : 'avG0hiqBEOQYyXSw',
	provider : 'ncUWtqCy091jSe57',
	venue_id : '8nqz3Ay49orh1mcv',
	venue_type : 'ILpaY5NFWPbiXsCV',
);
```