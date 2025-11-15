# auth.reportMissingCode

**Description** : *Official apps only, reports that the SMS authentication code wasn&#039;t delivered*

**Layer** : 216

```tl
auth.reportMissingCode#cb9deff6 phone_number:string phone_code_hash:string mnc:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number where we were supposed to receive the code |
| <mark>phone_code_hash</mark> | [`string`](type/string) | The phone code hash obtained from auth.sendCode |
| <mark>mnc</mark> | [`string`](type/string) | MNC of the current network operator |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |

---

## Example

```php
$bool = $client->auth->reportMissingCode(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	mnc : 'J6DYzapjZRkMxG9q',
);
```