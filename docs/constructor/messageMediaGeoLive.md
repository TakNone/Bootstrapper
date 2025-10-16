# messageMediaGeoLive

**Description** : *Indicates a live geolocation*

**Layer** : 216

```tl
messageMediaGeoLive#b940c666 flags:# geo:GeoPoint heading:flags.0?int period:int proximity_notification_radius:flags.1?int = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | Geolocation |
| **heading** | [`flags.0?int`](type/int) | For live locations, a direction in which the location moves, in degrees; 1-360 |
| <mark>period</mark> | [`int`](type/int) | Validity period of provided geolocation |
| **proximity_notification_radius** | [`flags.1?int`](type/int) | For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000) |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaGeoLive(
	geo : $client->geoPointEmpty(),
	heading : 0,
	period : 58,
	proximity_notification_radius : 91,
);
```