# account.updatePasswordSettings

**Description** : *Set a new 2FA password*

**Layer** : 216

```tl
account.updatePasswordSettings#a59b102f password:InputCheckPasswordSRP new_settings:account.PasswordInputSettings = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | The old password (see SRP) |
| <mark>new_settings</mark> | [`account.PasswordInputSettings`](type/account.PasswordInputSettings) | The new password (see SRP) |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMAIL_INVALID** | `400` | The specified email is invalid |
| **EMAIL_UNCONFIRMED** | `400` | Email unconfirmed |
| **EMAIL_UNCONFIRMED_%d** | `400` | The provided email isn't confirmed, %d is the length of the verification code that was just sent to the email: use account.verifyEmail to enter the received verification code and enable the recovery email |
| **NEW_SALT_INVALID** | `400` | The new salt is invalid |
| **NEW_SETTINGS_EMPTY** | `400` | No password is set on the current account, and no new password was specified in new_settings |
| **NEW_SETTINGS_INVALID** | `400` | The new password settings are invalid |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |
| **SRP_ID_INVALID** | `400` | Invalid SRP ID provided |
| **SRP_PASSWORD_CHANGED** | `400` | Password has changed |

---

## Example

```php
$bool = $client->account->updatePasswordSettings(
	password : $client->inputCheckPasswordEmpty(),
	new_settings : $client->account->passwordInputSettings(
		new_algo : $client->passwordKdfAlgoUnknown(),
		new_password_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		hint : 'Xp8qrlD6LamjoGT5',
		email : 'reply@liveproto.dev',
		new_secure_settings : $client->secureSecretSettings(
			secure_algo : $client->securePasswordKdfAlgoUnknown(...),
			secure_secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			secure_secret_id : -218657926696887481,
		),
	),
);
```