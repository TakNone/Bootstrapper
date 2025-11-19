# geoPoint

**Description** : *GeoPoint*

**Layer** : 218

```tl
geoPoint#b2a2f663 flags:# long:double lat:double access_hash:long accuracy_radius:flags.0?int = GeoPoint;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>long</mark> | [`double`](type/double) | Longitude |
| <mark>lat</mark> | [`double`](type/double) | Latitude |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| **accuracy_radius** | [`flags.0?int`](type/int) | The estimated horizontal accuracy of the location, in meters; as defined by the sender |

---

## Type

[GeoPoint](type/GeoPoint)

---

## Example

```php
$geoPoint = $client->geoPoint(
	long : -1006231.8564453125,
	lat : 1981865.447265625,
	access_hash : -2252681785664576081,
	accuracy_radius : 8,
);
```