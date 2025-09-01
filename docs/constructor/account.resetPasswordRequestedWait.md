# account.resetPasswordRequestedWait

**Description** : *You successfully requested a password reset, please wait until the specified date before finalizing the reset*

**Layer** : 214

```tl
account.resetPasswordRequestedWait#e9effc7d until_date:int = account.ResetPasswordResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>until_date</mark> | [`int`](type/int) | Wait until this date before finalizing the reset |

---

## Type

[account.ResetPasswordResult](type/account.ResetPasswordResult)

---

## Example

```php
$accountResetPasswordResult = $client->account->resetPasswordRequestedWait(
	until_date : 8,
);
```