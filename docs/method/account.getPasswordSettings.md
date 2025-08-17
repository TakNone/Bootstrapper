# account.getPasswordSettings

**Description** : *Get private info associated to the password info (recovery email, telegram passport info & so on)*

**Layer** : 211

```tl
account.getPasswordSettings#9cd4eaf9 password:InputCheckPasswordSRP = account.PasswordSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | The password (see SRP) |

---

## Result

[account.PasswordSettings](type/account.PasswordSettings)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |

---

## Example

```php
$accountPasswordSettings = $client->account->getPasswordSettings(
	password : $client->inputCheckPasswordEmpty(),
);
```