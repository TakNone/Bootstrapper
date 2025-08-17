# account.declinePasswordReset

**Description** : *Abort a pending 2FA password reset, see here for more info »*

**Layer** : 211

```tl
account.declinePasswordReset#4c9409f6 = Bool;
```

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **RESET_REQUEST_MISSING** | `400` | No password reset is in progress |

---

## Example

```php
$bool = $client->account->declinePasswordReset();
```