# account.getTmpPassword

**Description** : *Get temporary payment password*

**Layer** : 216

```tl
account.getTmpPassword#449e0b51 password:InputCheckPasswordSRP period:int = account.TmpPassword;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | SRP password parameters |
| <mark>period</mark> | [`int`](type/int) | Time during which the temporary password will be valid, in seconds; should be between 60 and 86400 |

---

## Result

[account.TmpPassword](type/account.TmpPassword)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |
| **SRP_A_INVALID** | `400` | The specified inputCheckPasswordSRP.A value is invalid |
| **TMP_PASSWORD_DISABLED** | `400` | The temporary password is disabled |

---

## Example

```php
$accountTmpPassword = $client->account->getTmpPassword(
	password : $client->inputCheckPasswordEmpty(),
	period : 70,
);
```