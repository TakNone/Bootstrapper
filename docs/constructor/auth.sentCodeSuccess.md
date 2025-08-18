# auth.sentCodeSuccess

**Description** : *The user successfully authorized using future auth tokens*

**Layer** : 211

```tl
auth.sentCodeSuccess#2390fe44 authorization:auth.Authorization = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>authorization</mark> | [`auth.Authorization`](type/auth.Authorization) | Authorization info |

---

## Type

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->auth->sentCodeSuccess(
	authorization : $client->auth->authorization(
		setup_password_required : true,
		otherwise_relogin_days : 62,
		tmp_sessions : 55,
		future_auth_token : '(s.*?LiveProto?0P??',
		user : $client->userEmpty(
			id : -5791379500739767875,
		),
	),
);
```