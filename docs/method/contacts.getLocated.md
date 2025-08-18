# contacts.getLocated

**Description** : *Get users and geochats near you, see here &raquo; for more info*

**Layer** : 211

```tl
contacts.getLocated#d348bc44 flags:# background:flags.1?true geo_point:InputGeoPoint self_expires:flags.0?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **background** | [`flags.1?true`](type/true) | While the geolocation of the current user is public, clients should update it in the background every half-an-hour or so, while setting this flag. Do this only if the new location is more than 1 KM away from the previous one, or if the previous location is unknown |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | Geolocation |
| **self_expires** | [`flags.0?int`](type/int) | If set, the geolocation of the current user will be public for the specified number of seconds; pass 0x7fffffff to disable expiry, 0 to make the current geolocation private; if the flag isn't set, no changes will be applied |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_ADDRESS_ACTIVE** | `406` | The user is currently advertising a Business Location, the location may only be changed (or removed) using account.updateBusinessLocation ».   |
| **GEO_POINT_INVALID** | `400` | Invalid geoposition provided |
| **USERPIC_PRIVACY_REQUIRED** | `406` | You need to disable privacy settings for your profile picture in order to make your geolocation public |
| **USERPIC_UPLOAD_REQUIRED** | `406` | You must have a profile picture to publish your geolocation |

---

## Example

```php
$updates = $client->contacts->getLocated(
	background : true,
	geo_point : $client->inputGeoPointEmpty(),
	self_expires : 53,
);
```