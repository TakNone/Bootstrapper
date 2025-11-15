# channels.editLocation

**Description** : *Edit location of geogroup, see here &raquo; for more info on geogroups*

**Layer** : 216

```tl
channels.editLocation#58e63f6d channel:InputChannel geo_point:InputGeoPoint address:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Geogroup |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | New geolocation |
| <mark>address</mark> | [`string`](type/string) | Address string |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **MEGAGROUP_GEO_REQUIRED** | `400` | This method can only be invoked on a geogroup |
| **MEGAGROUP_REQUIRED** | `400` | You can only use this method on a supergroup |

---

## Example

```php
$bool = $client->channels->editLocation(
	channel : $client->inputChannelEmpty(),
	geo_point : $client->inputGeoPointEmpty(),
	address : 'KRmUcQ6ohLsjVPeb',
);
```