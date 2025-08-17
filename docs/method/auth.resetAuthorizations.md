# auth.resetAuthorizations

**Description** : *Terminates all user's authorized sessions except for the current one*

**Layer** : 211

```tl
auth.resetAuthorizations#9fab0d1a = Bool;
```

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FRESH_RESET_AUTHORISATION_FORBIDDEN** | `406` | You can't logout other sessions if less than 24 hours have passed since you logged on the current session |

---

## Example

```php
$bool = $client->auth->resetAuthorizations();
```