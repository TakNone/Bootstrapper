# account.verifyPhone

**Description** : *Verify a phone number for telegram passport*

**Layer** : 211

```tl
account.verifyPhone#4dd3a7f6 phone_number:string phone_code_hash:string phone_code:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash received from the call to account.sendVerifyPhoneCode |
| <mark>phone_code</mark> | [`string`](type/string) | Code received after the call to account.sendVerifyPhoneCode |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_CODE_EMPTY** | `400` | phone_code is missing |
| **PHONE_CODE_EXPIRED** | `400` | The phone code you provided has expired |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |

---

## Example

```php
$bool = $client->account->verifyPhone(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	phone_code : '+1234567890',
);
```