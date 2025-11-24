# auth.authorization

**Description** : *Contains user authorization info*

**Layer** : 218

```tl
auth.authorization#2ea2c0d4 flags:# setup_password_required:flags.1?true otherwise_relogin_days:flags.1?int tmp_sessions:flags.0?int future_auth_token:flags.2?bytes user:User = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **setup_password_required** | [`flags.1?true`](type/true) | Suggests the user to set up a 2-step verification password to be able to log in again |
| **otherwise_relogin_days** | [`flags.1?int`](type/int) | If and only if setup_password_required is set and the user declines to set a 2-step verification password, they will be able to log into their account via SMS again only after this many days pass |
| **tmp_sessions** | [`flags.0?int`](type/int) | Temporary passport sessions |
| **future_auth_token** | [`flags.2?bytes`](type/bytes) | A future auth token |
| <mark>user</mark> | [`User`](type/User) | Info on authorized user |

---

## Type

[auth.Authorization](type/auth.Authorization)

---

## Example

```php
$authAuthorization = $client->auth->authorization(
	setup_password_required : true,
	otherwise_relogin_days : 67,
	tmp_sessions : 50,
	future_auth_token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	user : $client->userEmpty(
		id : 4816786751047266516,
	),
);
```