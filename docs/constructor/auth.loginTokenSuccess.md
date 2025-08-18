# auth.loginTokenSuccess

**Description** : *Login via token \(QR code\) succeeded\!*

**Layer** : 211

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
		otherwise_relogin_days : 43,
		tmp_sessions : 92,
		future_auth_token : '#z_?JLiveProtoK s ',
		user : $client->userEmpty(
			id : -3336407144007813089,
		),
	),
);
```