# account.resetPasswordOk

**Description** : *The 2FA password was reset successfully*

**Layer** : 211

```tl
account.resetPasswordOk#e926d63e = account.ResetPasswordResult;
```

---

## Type

[account.ResetPasswordResult](type/account.ResetPasswordResult)

---

## Example

```php
$accountResetPasswordResult = $client->account->resetPasswordOk();
```