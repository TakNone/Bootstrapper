# account.setAuthorizationTTL

**Description** : *Set time\-to\-live of current session*

**Layer** : 216

```tl
account.setAuthorizationTTL#bf899aa0 authorization_ttl_days:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>authorization_ttl_days</mark> | [`int`](type/int) | Time-to-live of current session in days |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FRESH_RESET_AUTHORISATION_FORBIDDEN** | `406` | You can't logout other sessions if less than 24 hours have passed since you logged on the current session |
| **TTL_DAYS_INVALID** | `400` | The provided TTL is invalid |

---

## Example

```php
$bool = $client->account->setAuthorizationTTL(
	authorization_ttl_days : 71,
);
```