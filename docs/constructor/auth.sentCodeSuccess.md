# auth.sentCodeSuccess

**Description** : *The user successfully authorized using future auth tokens*

**Layer** : 218

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
		otherwise_relogin_days : 55,
		tmp_sessions : 80,
		future_auth_token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		user : $client->userEmpty(
			id : 1361776900595181222,
		),
	),
);
```