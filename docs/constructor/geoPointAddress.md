# geoPointAddress

**Description** : *Address optionally associated to a geoPoint*

**Layer** : 225

```tl
geoPointAddress#de4c5d93 flags:# country_iso2:string state:flags.0?string city:flags.1?string street:flags.2?string = GeoPointAddress;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>country_iso2</mark> | [`string`](type/string) | Two-letter ISO 3166-1 alpha-2 country code |
| **state** | [`flags.0?string`](type/string) | State |
| **city** | [`flags.1?string`](type/string) | City |
| **street** | [`flags.2?string`](type/string) | Street |

---

## Type

[GeoPointAddress](type/GeoPointAddress)

---

## Example

```php
$geoPointAddress = $client->geoPointAddress(
	country_iso2 : 'ShmdE1pC3uv8VZ5D',
	state : 'ty2ZjzeQE41nNiJp',
	city : 'x4eBSZQnFrbJpWAy',
	street : 'tsKghYECRauVvAyG',
);
```