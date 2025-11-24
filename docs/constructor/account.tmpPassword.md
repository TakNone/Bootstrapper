# account.tmpPassword

**Description** : *Temporary payment password*

**Layer** : 218

```tl
account.tmpPassword#db64fd34 tmp_password:bytes valid_until:int = account.TmpPassword;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tmp_password</mark> | [`bytes`](type/bytes) | Temporary password |
| <mark>valid_until</mark> | [`int`](type/int) | Validity period |

---

## Type

[account.TmpPassword](type/account.TmpPassword)

---

## Example

```php
$accountTmpPassword = $client->account->tmpPassword(
	tmp_password : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	valid_until : 26,
);
```