# auth.loginTokenMigrateTo

**Description** : *Repeat the query to the specified DC*

**Layer** : 218

```tl
auth.loginTokenMigrateTo#68e9916 dc_id:int token:bytes = auth.LoginToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID |
| <mark>token</mark> | [`bytes`](type/bytes) | Token to use for login |

---

## Type

[auth.LoginToken](type/auth.LoginToken)

---

## Example

```php
$authLoginToken = $client->auth->loginTokenMigrateTo(
	dc_id : 91,
	token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```