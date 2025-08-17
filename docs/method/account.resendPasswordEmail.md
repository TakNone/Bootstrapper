# account.resendPasswordEmail

**Description** : *Resend the code to verify an email to use as 2FA recovery method*

**Layer** : 211

```tl
account.resendPasswordEmail#7a7f2a15 = Bool;
```

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMAIL_HASH_EXPIRED** | `400` | Email hash expired |

---

## Example

```php
$bool = $client->account->resendPasswordEmail();
```