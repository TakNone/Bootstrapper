# businessLocation

**Description** : *Represents the location of a Telegram Business &raquo;*

**Layer** : 216

```tl
businessLocation#ac5c1af7 flags:# geo_point:flags.0?GeoPoint address:string = BusinessLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **geo_point** | [`flags.0?GeoPoint`](type/GeoPoint) | Geographical coordinates (optional) |
| <mark>address</mark> | [`string`](type/string) | Textual description of the address (mandatory) |

---

## Type

[BusinessLocation](type/BusinessLocation)

---

## Example

```php
$businessLocation = $client->businessLocation(
	geo_point : $client->geoPointEmpty(),
	address : 'ifmy1OHT3LMwdCVW',
);
```