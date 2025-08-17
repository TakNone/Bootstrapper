# auth.cancelCode

**Description** : *Cancel the login verification code*

**Layer** : 211

```tl
auth.cancelCode#1f040578 phone_number:string phone_code_hash:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash from auth.sendCode |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_CODE_EXPIRED** | `400` | The phone code you provided has expired |
| **PHONE_NUMBER_INVALID** | `406` | The phone number is invalid |

---

## Example

```php
$bool = $client->auth->cancelCode(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
);
```