# auth.signIn

**Description** : *Signs in a user with a validated phone number*

**Layer** : 218

```tl
auth.signIn#8d52a951 flags:# phone_number:string phone_code_hash:string phone_code:flags.0?string email_verification:flags.1?EmailVerification = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number in the international format |
| <mark>phone_code_hash</mark> | [`string`](type/string) | SMS-message ID, obtained from auth.sendCode |
| **phone_code** | [`flags.0?string`](type/string) | Valid numerical code from the SMS-message |
| **email_verification** | [`flags.1?EmailVerification`](type/EmailVerification) | Email verification code or token |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTH_RESTART** | `500` | Restart the authorization process |
| **PHONE_CODE_EMPTY** | `400` | phone_code is missing |
| **PHONE_CODE_EXPIRED** | `400` | The phone code you provided has expired |
| **PHONE_CODE_INVALID** | `400` | The provided phone code is invalid |
| **PHONE_NUMBER_INVALID** | `406` | The phone number is invalid |
| **PHONE_NUMBER_UNOCCUPIED** | `400` | The phone number is not yet being used |
| **SIGN_IN_FAILED** | `500` | Failure while signing in |
| **UPDATE_APP_TO_LOGIN** | `406` | Please update your client to login |

---

## Example

```php
$authAuthorization = $client->auth->signIn(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	phone_code : '+1234567890',
	email_verification : $client->emailVerificationCode(
		code : 'JZzV94wm812qrHGx',
	),
);
```