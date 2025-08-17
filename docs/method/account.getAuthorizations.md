# account.getAuthorizations

**Description** : *Get logged-in sessions*

**Layer** : 211

```tl
account.getAuthorizations#e320c158 = account.Authorizations;
```

---

## Result

[account.Authorizations](type/account.Authorizations)

---

## Example

```php
$accountAuthorizations = $client->account->getAuthorizations();
```