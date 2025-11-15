# auth.resendCode

**Description** : *Resend the login code via another medium, the phone code type is determined by the return value of the previous auth\.sendCode/auth\.resendCode: see login for more info*

**Layer** : 218

```tl
auth.resendCode#cae47523 flags:# phone_number:string phone_code_hash:string reason:flags.0?string = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>phone_number</mark> | [`string`](type/string) | The phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | The phone code hash obtained from auth.sendCode |
| **reason** | [`flags.0?string`](type/string) | Official clients only, used if the device integrity verification failed, and no secret could be obtained to invoke auth.requestFirebaseSms: in this case, the device integrity verification failure reason must be passed here |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_CODE_EMPTY** | `400` | phone_code is missing |
| **PHONE_CODE_EXPIRED** | `400` | The phone code you provided has expired |
| **PHONE_CODE_HASH_EMPTY** | `400` | phone_code_hash is missing |
| **PHONE_NUMBER_INVALID** | `406` | The phone number is invalid |
| **SEND_CODE_UNAVAILABLE** | `406` | Returned when all available options for this type of number were already used (e.g. flash-call, then SMS, then this error might be returned to trigger a second resend) |

---

## Example

```php
$authSentCode = $client->auth->resendCode(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	reason : '9CcM23uyfsihBZKp',
);
```