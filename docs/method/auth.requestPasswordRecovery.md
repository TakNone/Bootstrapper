# auth.requestPasswordRecovery

**Description** : *Request recovery code of a 2FA password, only for accounts with a recovery email configured*

**Layer** : 211

```tl
auth.requestPasswordRecovery#d897bc66 = auth.PasswordRecovery;
```

---

## Result

[auth.PasswordRecovery](type/auth.PasswordRecovery)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PASSWORD_EMPTY** | `400` | The provided password is empty |
| **PASSWORD_RECOVERY_NA** | `400` | No email was set, can't recover password via email |

---

## Example

```php
$authPasswordRecovery = $client->auth->requestPasswordRecovery();
```