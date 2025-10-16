# account.deleteAccount

**Description** : *Delete the user&#039;s account from the telegram servers*

**Layer** : 216

```tl
account.deleteAccount#a2c0cf74 flags:# reason:string password:flags.0?InputCheckPasswordSRP = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>reason</mark> | [`string`](type/string) | Why is the account being deleted, can be empty |
| **password** | [`flags.0?InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | 2FA password: this field can be omitted even for accounts with 2FA enabled: in this case account account deletion will be delayed by 7 days as specified in the docs » |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **2FA_CONFIRM_WAIT_%d** | `420` | Since this account is active and protected by a 2FA password, we will delete it in 1 week for security purposes. You can cancel this process at any time, you'll be able to reset your account in %d seconds |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |

---

## Example

```php
$bool = $client->account->deleteAccount(
	reason : 'kLnslhxIuYtvJK6g',
	password : $client->inputCheckPasswordEmpty(),
);
```