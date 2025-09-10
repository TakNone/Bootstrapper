# auth.recoverPassword

**Description** : *Reset the 2FA password using the recovery code sent using auth\.requestPasswordRecovery*

**Layer** : 214

```tl
auth.recoverPassword#37096c70 flags:# code:string new_settings:flags.0?account.PasswordInputSettings = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>code</mark> | [`string`](type/string) | Code received via email |
| **new_settings** | [`flags.0?account.PasswordInputSettings`](type/account.PasswordInputSettings) | New password |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CODE_EMPTY** | `400` | The provided code is empty |
| **NEW_SETTINGS_INVALID** | `400` | The new password settings are invalid |

---

## Example

```php
$authAuthorization = $client->auth->recoverPassword(
	code : 'DFoiIn7zXbZVOCxK',
	new_settings : $client->account->passwordInputSettings(
		new_algo : $client->passwordKdfAlgoUnknown(),
		new_password_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		hint : 'W3InSC6oj0pv7NKP',
		email : 'reply@liveproto.dev',
		new_secure_settings : $client->secureSecretSettings(
			secure_algo : $client->securePasswordKdfAlgoUnknown(...),
			secure_secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secure_secret_id : 4074317912059988168,
		),
	),
);
```