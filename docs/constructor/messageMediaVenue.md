# messageMediaVenue

**Description** : *Venue*

**Layer** : 211

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
	title : 'fKOPrw5aDeZxG0Xb',
	address : 'w5N8H2lBoZtc9edW',
	provider : 'yNoVT6Lg4RCxJqDk',
	venue_id : 'EsB5gcUbiOWYHXC6',
	venue_type : 'Z1sObc6u9kagV3A8',
);
```