# account.sendChangePhoneCode

**Description** : *Verify a new phone number to associate to the current account*

**Layer** : 218

```tl
account.sendChangePhoneCode#82574ae5 phone_number:string settings:CodeSettings = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | New phone number |
| <mark>settings</mark> | [`CodeSettings`](type/CodeSettings) | Phone code settings |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FRESH_CHANGE_PHONE_FORBIDDEN** | `406` | You can't change phone number right after logging in, please wait at least 24 hours |
| **PHONE_NUMBER_BANNED** | `400` | The provided phone number is banned from telegram |
| **PHONE_NUMBER_INVALID** | `406` | The phone number is invalid |
| **PHONE_NUMBER_OCCUPIED** | `400` | The phone number is already in use |

---

## Example

```php
$authSentCode = $client->account->sendChangePhoneCode(
	phone_number : '+1234567890',
	settings : $client->codeSettings(
		allow_flashcall : true,
		current_number : true,
		allow_app_hash : true,
		allow_missed_call : true,
		allow_firebase : true,
		unknown_number : true,
		logout_tokens : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
		token : 'P08dtAJNhHvRuaeG',
		app_sandbox : true,
	),
);
```