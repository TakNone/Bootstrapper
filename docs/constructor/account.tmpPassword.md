# account.tmpPassword

**Description** : *Temporary payment password*

**Layer** : 211

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
	tmp_password : '?4Q?LiveProto????<',
	valid_until : 66,
);
```