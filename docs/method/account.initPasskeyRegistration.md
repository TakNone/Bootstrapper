# account.initPasskeyRegistration

**Description** : *Initialize passkey registration for the current account, see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
account.initPasskeyRegistration#429547e8 = account.PasskeyRegistrationOptions;
```

---

## Result

[account.PasskeyRegistrationOptions](type/account.PasskeyRegistrationOptions)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ACCESS_DENIED** | `403` | The account was deactivated, or is a bot/service account |
| **FRESH_RESET_AUTHORISATION_FORBIDDEN** | `406` | You can't logout other sessions if less than 24 hours have passed since you logged on the current session |

---

## Example

```php
$accountPasskeyRegistrationOptions = $client->account->initPasskeyRegistration();
```