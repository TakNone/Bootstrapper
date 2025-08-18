# account.resetPasswordFailedWait

**Description** : *You recently requested a password reset that was canceled, please wait until the specified date before requesting another reset*

**Layer** : 211

```tl
account.resetPasswordFailedWait#e3779861 retry_date:int = account.ResetPasswordResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>retry_date</mark> | [`int`](type/int) | Wait until this date before requesting another reset |

---

## Type

[account.ResetPasswordResult](type/account.ResetPasswordResult)

---

## Example

```php
$accountResetPasswordResult = $client->account->resetPasswordFailedWait(
	retry_date : 8,
);
```