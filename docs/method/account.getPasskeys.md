# account.getPasskeys

**Description** : *List the passkeys associated to the current account that can be used to log in, see here &raquo; for more info on passkeys*

**Layer** : 233

```tl
account.getPasskeys#ea1f0c52 = account.Passkeys;
```

---

## Result

[account.Passkeys](type/account.Passkeys)

---

## Example

```php
$accountPasskeys = $client->account->getPasskeys();
```