# updateNewAuthorization

**Description** : *A new session logged into the current user&#039;s account through an unknown device*

**Layer** : 218

```tl
updateNewAuthorization#8951abef flags:# unconfirmed:flags.0?true hash:long date:flags.0?int device:flags.0?string location:flags.0?string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **unconfirmed** | [`flags.0?true`](type/true) | Whether the session is unconfirmed, see here » for more info |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| **date** | [`flags.0?int`](type/int) | Authorization date |
| **device** | [`flags.0?string`](type/string) | Name of device, for example Android |
| **location** | [`flags.0?string`](type/string) | Location, for example USA, NY (IP=1.2.3.4) |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewAuthorization(
	unconfirmed : true,
	hash : 0,
	date : 66,
	device : 'wqM7dgPe2cB8mSsR',
	location : 'iWHwVETONq1Lv2Ux',
);
```