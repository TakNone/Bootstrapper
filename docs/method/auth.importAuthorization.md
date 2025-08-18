# auth.importAuthorization

**Description** : *Logs in a user using a key transmitted from his native data\-center*

**Layer** : 211

```tl
auth.importAuthorization#a57a7dad id:long bytes:bytes = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | User ID |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Authorization key |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTH_BYTES_INVALID** | `400` | The provided authorization is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$authAuthorization = $client->auth->importAuthorization(
	id : -5163649104753571168,
	bytes : 'G??LLiveProtoi???',
);
```