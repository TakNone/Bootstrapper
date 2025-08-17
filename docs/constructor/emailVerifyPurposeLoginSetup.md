# emailVerifyPurposeLoginSetup

**Description** : *Email verification purpose: setup login email*

**Layer** : 211

```tl
emailVerifyPurposeLoginSetup#4345be73 phone_number:string phone_code_hash:string = EmailVerifyPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash as specified by the documentation |

---

## Type

[EmailVerifyPurpose](type/EmailVerifyPurpose)

---

## Example

```php
$emailVerifyPurpose = $client->emailVerifyPurposeLoginSetup(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
);
```