# account.ResetPasswordResult

**Description** : *Result of an account.resetPassword request*

**Layer** : 211

```tl
account.resetPasswordFailedWait#e3779861 retry_date:int = account.ResetPasswordResult;
account.resetPasswordRequestedWait#e9effc7d until_date:int = account.ResetPasswordResult;
account.resetPasswordOk#e926d63e = account.ResetPasswordResult;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**account.resetPasswordFailedWait**](constructor/account.resetPasswordFailedWait) | You recently requested a password reset that was canceled, please wait until the specified date before requesting another reset |
| [**account.resetPasswordRequestedWait**](constructor/account.resetPasswordRequestedWait) | You successfully requested a password reset, please wait until the specified date before finalizing the reset |
| [**account.resetPasswordOk**](constructor/account.resetPasswordOk) | The 2FA password was reset successfully |