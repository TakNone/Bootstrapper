# account.passwordSettings

**Description** : *Private info associated to the password info \(recovery email, telegram passport info &amp; so on\)*

**Layer** : 216

```tl
account.passwordSettings#9a5c33e5 flags:# email:flags.0?string secure_settings:flags.1?SecureSecretSettings = account.PasswordSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **email** | [`flags.0?string`](type/string) | 2FA Recovery email |
| **secure_settings** | [`flags.1?SecureSecretSettings`](type/SecureSecretSettings) | Telegram passport settings |

---

## Type

[account.PasswordSettings](type/account.PasswordSettings)

---

## Example

```php
$accountPasswordSettings = $client->account->passwordSettings(
	email : 'reply@liveproto.dev',
	secure_settings : $client->secureSecretSettings(
		secure_algo : $client->securePasswordKdfAlgoUnknown(),
		secure_secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		secure_secret_id : 3914152993764051623,
	),
);
```