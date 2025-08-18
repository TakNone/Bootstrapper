# account.resetAuthorization

**Description** : *Log out an active authorized session by its hash*

**Layer** : 211

```tl
account.resetAuthorization#df77f3bc hash:long = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Session hash |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FRESH_RESET_AUTHORISATION_FORBIDDEN** | `406` | You can't logout other sessions if less than 24 hours have passed since you logged on the current session |
| **HASH_INVALID** | `400` | The provided hash is invalid |

---

## Example

```php
$bool = $client->account->resetAuthorization(
	hash : -7182715300620237904,
);
```