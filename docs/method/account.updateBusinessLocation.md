# account.updateBusinessLocation

**Description** : *Businesses &raquo; may advertise their location using this method, see here &raquo; for more info*

**Layer** : 216

```tl
account.updateBusinessLocation#9e6b131a flags:# geo_point:flags.1?InputGeoPoint address:flags.0?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **geo_point** | [`flags.1?InputGeoPoint`](type/InputGeoPoint) | Optional, contains a set of geographical coordinates |
| **address** | [`flags.0?string`](type/string) | Mandatory when setting/updating the location, contains a textual description of the address (max 96 UTF-8 chars) |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->updateBusinessLocation(
	geo_point : $client->inputGeoPointEmpty(),
	address : 'VRpyvdHzxE0AGcZ1',
);
```