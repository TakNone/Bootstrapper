# account.resetPassword

**Description** : *Initiate a 2FA password reset: can only be used if the user is already logged-in, see here for more info »*

**Layer** : 211

```tl
account.resetPassword#9308ce1b = account.ResetPasswordResult;
```

---

## Result

[account.ResetPasswordResult](type/account.ResetPasswordResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PASSWORD_EMPTY** | `400` | The provided password is empty |

---

## Example

```php
$accountResetPasswordResult = $client->account->resetPassword();
```