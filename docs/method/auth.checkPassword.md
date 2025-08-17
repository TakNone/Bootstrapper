# auth.checkPassword

**Description** : *Try logging to an account protected by a 2FA password*

**Layer** : 211

```tl
auth.checkPassword#d18b4d16 password:InputCheckPasswordSRP = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | The account's password (see SRP) |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTH_KEY_UNSYNCHRONIZED** | `500` | Internal error, please repeat the method call |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |
| **SRP_ID_INVALID** | `400` | Invalid SRP ID provided |
| **SRP_PASSWORD_CHANGED** | `400` | Password has changed |

---

## Example

```php
$authAuthorization = $client->auth->checkPassword(
	password : $client->inputCheckPasswordEmpty(),
);
```