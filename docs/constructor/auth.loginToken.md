# auth.loginToken

**Description** : *Login token \(for QR code login\)*

**Layer** : 216

```tl
auth.loginToken#629f1980 expires:int token:bytes = auth.LoginToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>expires</mark> | [`int`](type/int) | Expiration date of QR code |
| <mark>token</mark> | [`bytes`](type/bytes) | Token to render in QR code |

---

## Type

[auth.LoginToken](type/auth.LoginToken)

---

## Example

```php
$authLoginToken = $client->auth->loginToken(
	expires : 80,
	token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```