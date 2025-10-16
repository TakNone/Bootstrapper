# account.passwordInputSettings

**Description** : *Settings for setting up a new password*

**Layer** : 216

```tl
account.passwordInputSettings#c23727c9 flags:# new_algo:flags.0?PasswordKdfAlgo new_password_hash:flags.0?bytes hint:flags.0?string email:flags.1?string new_secure_settings:flags.2?SecureSecretSettings = account.PasswordInputSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **new_algo** | [`flags.0?PasswordKdfAlgo`](type/PasswordKdfAlgo) | The SRP algorithm to use |
| **new_password_hash** | [`flags.0?bytes`](type/bytes) | The computed password hash |
| **hint** | [`flags.0?string`](type/string) | Text hint for the password |
| **email** | [`flags.1?string`](type/string) | Password recovery email |
| **new_secure_settings** | [`flags.2?SecureSecretSettings`](type/SecureSecretSettings) | Telegram passport settings |

---

## Type

[account.PasswordInputSettings](type/account.PasswordInputSettings)

---

## Example

```php
$accountPasswordInputSettings = $client->account->passwordInputSettings(
	new_algo : $client->passwordKdfAlgoUnknown(),
	new_password_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	hint : 'trqaPgRKu1Q72FvW',
	email : 'reply@liveproto.dev',
	new_secure_settings : $client->secureSecretSettings(
		secure_algo : $client->securePasswordKdfAlgoUnknown(),
		secure_secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secure_secret_id : 3064944574142789886,
	),
);
```