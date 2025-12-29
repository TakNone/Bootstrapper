# inputMediaGeoLive

**Description** : *Live geolocation*

**Layer** : 218

```tl
inputMediaGeoLive#971fa843 flags:# stopped:flags.0?true geo_point:InputGeoPoint heading:flags.2?int period:flags.1?int proximity_notification_radius:flags.3?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **stopped** | [`flags.0?true`](type/true) | Whether sending of the geolocation was stopped |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | Current geolocation |
| **heading** | [`flags.2?int`](type/int) | For live locations, a direction in which the location moves, in degrees; 1-360 |
| **period** | [`flags.1?int`](type/int) | Validity period of the current location |
| **proximity_notification_radius** | [`flags.3?int`](type/int) | For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000) |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaGeoLive(
	stopped : true,
	geo_point : $client->inputGeoPointEmpty(),
	heading : 16,
	period : 39,
	proximity_notification_radius : 26,
);
```