# account.password

**Description** : *Configuration for two\-factor authorization*

**Layer** : 218

```tl
account.password#957b50fb flags:# has_recovery:flags.0?true has_secure_values:flags.1?true has_password:flags.2?true current_algo:flags.2?PasswordKdfAlgo srp_B:flags.2?bytes srp_id:flags.2?long hint:flags.3?string email_unconfirmed_pattern:flags.4?string new_algo:PasswordKdfAlgo new_secure_algo:SecurePasswordKdfAlgo secure_random:bytes pending_reset_date:flags.5?int login_email_pattern:flags.6?string = account.Password;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_recovery** | [`flags.0?true`](type/true) | Whether the user has a recovery method configured |
| **has_secure_values** | [`flags.1?true`](type/true) | Whether telegram passport is enabled |
| **has_password** | [`flags.2?true`](type/true) | Whether the user has a password |
| **current_algo** | [`flags.2?PasswordKdfAlgo`](type/PasswordKdfAlgo) | The KDF algorithm for SRP two-factor authentication of the current password |
| **srp_B** | [`flags.2?bytes`](type/bytes) | Srp B param for SRP authorization |
| **srp_id** | [`flags.2?long`](type/long) | Srp ID param for SRP authorization |
| **hint** | [`flags.3?string`](type/string) | Text hint for the password |
| **email_unconfirmed_pattern** | [`flags.4?string`](type/string) | A password recovery email with the specified pattern is still awaiting verification |
| <mark>new_algo</mark> | [`PasswordKdfAlgo`](type/PasswordKdfAlgo) | The KDF algorithm for SRP two-factor authentication to use when creating new passwords |
| <mark>new_secure_algo</mark> | [`SecurePasswordKdfAlgo`](type/SecurePasswordKdfAlgo) | The KDF algorithm for telegram passport |
| <mark>secure_random</mark> | [`bytes`](type/bytes) | Secure random string |
| **pending_reset_date** | [`flags.5?int`](type/int) | The 2FA password will be automatically removed at this date, unless the user cancels the operation |
| **login_email_pattern** | [`flags.6?string`](type/string) | A verified login email with the specified pattern is configured |

---

## Type

[account.Password](type/account.Password)

---

## Example

```php
$accountPassword = $client->account->password(
	has_recovery : true,
	has_secure_values : true,
	has_password : true,
	current_algo : $client->passwordKdfAlgoUnknown(),
	srp_B : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	srp_id : -2855538687889724427,
	hint : 'HdSjxirhG3Zu5fMF',
	email_unconfirmed_pattern : 'reply@liveproto.dev',
	new_algo : $client->passwordKdfAlgoUnknown(),
	new_secure_algo : $client->securePasswordKdfAlgoUnknown(),
	secure_random : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	pending_reset_date : 25,
	login_email_pattern : 'reply@liveproto.dev',
);
```