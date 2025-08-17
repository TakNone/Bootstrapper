# account.passwordSettings

**Description** : *Private info associated to the password info (recovery email, telegram passport info & so on)*

**Layer** : 211

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
		secure_secret : '??f?lLiveProto???N?',
		secure_secret_id : -8152564270987909831,
	),
);
```