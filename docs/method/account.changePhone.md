# account.changePhone

**Description** : *Change the phone number of the current account*

**Layer** : 211

```tl
account.changePhone#70c32edb phone_number:string phone_code_hash:string phone_code:string = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | New phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash received when calling account.sendChangePhoneCode |
| <mark>phone_code</mark> | [`string`](type/string) | Phone code received when calling account.sendChangePhoneCode |

---

## Result

[User](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_CODE_EMPTY** | `400` | phone_code is missing |
| **PHONE_CODE_EXPIRED** | `400` | The phone code you provided has expired |
| **PHONE_NUMBER_INVALID** | `406` | The phone number is invalid |
| **PHONE_NUMBER_OCCUPIED** | `400` | The phone number is already in use |

---

## Example

```php
$user = $client->account->changePhone(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	phone_code : '+1234567890',
);
```