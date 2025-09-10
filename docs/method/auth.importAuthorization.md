# auth.importAuthorization

**Description** : *Logs in a user using a key transmitted from his native data\-center*

**Layer** : 214

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
	id : 5149579175971801416,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```