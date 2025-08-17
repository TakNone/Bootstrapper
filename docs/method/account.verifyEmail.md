# account.verifyEmail

**Description** : *Verify an email address*

**Layer** : 211

```tl
account.verifyEmail#32da4cf purpose:EmailVerifyPurpose verification:EmailVerification = account.EmailVerified;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`EmailVerifyPurpose`](type/EmailVerifyPurpose) | Verification purpose |
| <mark>verification</mark> | [`EmailVerification`](type/EmailVerification) | Email verification code or token |

---

## Result

[account.EmailVerified](type/account.EmailVerified)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMAIL_INVALID** | `400` | The specified email is invalid |
| **EMAIL_NOT_ALLOWED** | `400` | The specified email cannot be used to complete the operation |
| **EMAIL_VERIFY_EXPIRED** | `400` | The verification email has expired |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |

---

## Example

```php
$accountEmailVerified = $client->account->verifyEmail(
	purpose : $client->emailVerifyPurposeLoginSetup(
		phone_number : '+1234567890',
		phone_code_hash : '+1234567890',
	),
	verification : $client->emailVerificationCode(
		code : 'Q14v5suxpqlYJEoa',
	),
);
```