# auth.recoverPassword

**Description** : *Reset the 2FA password using the recovery code sent using auth.requestPasswordRecovery*

**Layer** : 211

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
	code : 'ywNMWe7lzXHI0prV',
	new_settings : $client->account->passwordInputSettings(
		new_algo : $client->passwordKdfAlgoUnknown(),
		new_password_hash : '????(LiveProtoz?p)',
		hint : 'mjUAwrJNG1snDtId',
		email : 'reply@liveproto.dev',
		new_secure_settings : $client->secureSecretSettings(
			secure_algo : $client->securePasswordKdfAlgoUnknown(...),
			secure_secret : '?Z]MdLiveProto??i',
			secure_secret_id : -8817743837086813442,
		),
	),
);
```