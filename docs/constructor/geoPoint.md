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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	long : -433276.3740234375,
	lat : 1015801.734375,
	access_hash : 7780806947565854010,
	accuracy_radius : 58,
);
```