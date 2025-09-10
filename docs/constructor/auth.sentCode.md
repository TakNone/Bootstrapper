# auth.sentCode

**Description** : *Contains info about a sent verification code*

**Layer** : 214

```tl
auth.sentCode#5e002502 flags:# type:auth.SentCodeType phone_code_hash:string next_type:flags.1?auth.CodeType timeout:flags.2?int = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>type</mark> | [`auth.SentCodeType`](type/auth.SentCodeType) | Phone code type |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash, to be stored and later re-used with auth.signIn |
| **next_type** | [`flags.1?auth.CodeType`](type/auth.CodeType) | Phone code type that will be sent next, if the phone code is not received within timeout seconds: to send it use auth.resendCode |
| **timeout** | [`flags.2?int`](type/int) | Timeout for reception of the phone code |

---

## Type

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->auth->sentCode(
	type : $client->auth->sentCodeTypeApp(
		length : 44,
	),
	phone_code_hash : '+1234567890',
	next_type : $client->auth->codeTypeSms(),
	timeout : 98,
);
```