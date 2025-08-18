# account.sendVerifyPhoneCode

**Description** : *Send the verification phone code for telegram passport*

**Layer** : 211

```tl
account.sendVerifyPhoneCode#a5a356f9 phone_number:string settings:CodeSettings = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | The phone number to verify |
| <mark>settings</mark> | [`CodeSettings`](type/CodeSettings) | Phone code settings |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |

---

## Example

```php
$authSentCode = $client->account->sendVerifyPhoneCode(
	phone_number : '+1234567890',
	settings : $client->codeSettings(
		allow_flashcall : true,
		current_number : true,
		allow_app_hash : true,
		allow_missed_call : true,
		allow_firebase : true,
		unknown_number : true,
		logout_tokens : array('ִ!??LiveProto?5?f?'),
		token : 'd7OQrpHP1LIAz02e',
		app_sandbox : false,
	),
);
```