# auth.sendCode

**Description** : *Send the verification code for login*

**Layer** : 216

```tl
auth.sendCode#a677244f phone_number:string api_id:int api_hash:string settings:CodeSettings = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number in international format |
| <mark>api_id</mark> | [`int`](type/int) | Application identifier (see App configuration) |
| <mark>api_hash</mark> | [`string`](type/string) | Application secret hash (see App configuration) |
| <mark>settings</mark> | [`CodeSettings`](type/CodeSettings) | Settings for the code type to send |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **API_ID_INVALID** | `400` | API ID invalid |
| **API_ID_PUBLISHED_FLOOD** | `400` | This API id was published somewhere, you can't use it now |
| **AUTH_RESTART** | `500` | Restart the authorization process |
| **AUTH_RESTART_%d** | `500` | Internal error (debug info %d), please repeat the method call |
| **PHONE_NUMBER_APP_SIGNUP_FORBIDDEN** | `400` | You can't sign up using this app |
| **PHONE_NUMBER_BANNED** | `400` | The provided phone number is banned from telegram |
| **PHONE_NUMBER_FLOOD** | `400` | You asked for the code too many times |
| **PHONE_NUMBER_INVALID** | `406` | The phone number is invalid |
| **PHONE_PASSWORD_FLOOD** | `406` | You have tried logging in too many times |
| **PHONE_PASSWORD_PROTECTED** | `400` | This phone is password protected |
| **SMS_CODE_CREATE_FAILED** | `400` | An error occurred while creating the SMS code |
| **UPDATE_APP_TO_LOGIN** | `406` | Please update your client to login |

---

## Example

```php
$authSentCode = $client->auth->sendCode(
	phone_number : '+1234567890',
	api_id : 34,
	api_hash : 'oILDrld35Q4PaA92',
	settings : $client->codeSettings(
		allow_flashcall : true,
		current_number : true,
		allow_app_hash : true,
		allow_missed_call : true,
		allow_firebase : true,
		unknown_number : true,
		logout_tokens : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
		token : 'TgtJ7cL8dUqNCfFH',
		app_sandbox : false,
	),
);
```