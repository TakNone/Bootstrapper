# account.cancelPasswordEmail

**Description** : *Cancel the code that was sent to verify an email to use as 2FA recovery method*

**Layer** : 211

```tl
account.cancelPasswordEmail#c1cbd5b6 = Bool;
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
$bool = $client->account->cancelPasswordEmail();
```