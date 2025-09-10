# geoPoint

**Description** : *GeoPoint*

**Layer** : 214

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
	long : -1178649.203125,
	lat : -1004754.8779296875,
	access_hash : 4144125201571843371,
	accuracy_radius : 59,
);
```