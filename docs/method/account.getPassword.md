# account.getPassword

**Description** : *Obtain configuration for two\-factor authorization with password*

**Layer** : 216

```tl
account.getPassword#548a30f5 = account.Password;
```

---

## Result

[account.Password](type/account.Password)

---

## Example

```php
$accountPassword = $client->account->getPassword();
```