# auth.loginTokenSuccess

**Description** : *Login via token \(QR code\) succeeded\!*

**Layer** : 227

```tl
auth.loginTokenSuccess#390d5c5e authorization:auth.Authorization = auth.LoginToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>authorization</mark> | [`auth.Authorization`](type/auth.Authorization) | Authorization info |

---

## Type

[auth.LoginToken](type/auth.LoginToken)

---

## Example

```php
$authLoginToken = $client->auth->loginTokenSuccess(
	authorization : $client->auth->authorization(
		setup_password_required : true,
		otherwise_relogin_days : 66,
		tmp_sessions : 74,
		future_auth_token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		user : $client->userEmpty(
			id : -6224239443883192642,
		),
	),
);
```