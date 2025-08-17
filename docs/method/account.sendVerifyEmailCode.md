# account.sendVerifyEmailCode

**Description** : *Send an email verification code*

**Layer** : 211

```tl
account.sendVerifyEmailCode#98e037bb purpose:EmailVerifyPurpose email:string = account.SentEmailCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`EmailVerifyPurpose`](type/EmailVerifyPurpose) | Verification purpose |
| <mark>email</mark> | [`string`](type/string) | The email where to send the code |

---

## Result

[account.SentEmailCode](type/account.SentEmailCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMAIL_INVALID** | `400` | The specified email is invalid |
| **EMAIL_NOT_ALLOWED** | `400` | The specified email cannot be used to complete the operation |
| **EMAIL_NOT_SETUP** | `400` | In order to change the login email with emailVerifyPurposeLoginChange, an existing login email must already be set using emailVerifyPurposeLoginSetup |
| **PHONE_HASH_EXPIRED** | `400` | An invalid or expired phone_code_hash was provided |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |

---

## Example

```php
$accountSentEmailCode = $client->account->sendVerifyEmailCode(
	purpose : $client->emailVerifyPurposeLoginSetup(
		phone_number : '+1234567890',
		phone_code_hash : '+1234567890',
	),
	email : 'reply@liveproto.dev',
);
```