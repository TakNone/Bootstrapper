# secureValueErrorData

**Description** : *Represents an issue in one of the data fields that was provided by the user\. The error is considered resolved when the field&#039;s value changes*

**Layer** : 211

```tl
secureValueErrorData#e8a40bd9 type:SecureValueType data_hash:bytes field:string text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | The section of the user's Telegram Passport which has the error, one of secureValueTypePersonalDetails, secureValueTypePassport, secureValueTypeDriverLicense, secureValueTypeIdentityCard, secureValueTypeInternalPassport, secureValueTypeAddress |
| <mark>data_hash</mark> | [`bytes`](type/bytes) | Data hash |
| <mark>field</mark> | [`string`](type/string) | Name of the data field which has the error |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueErrorData(
	type : $client->secureValueTypePersonalDetails(),
	data_hash : 'Kp?XlLiveProtoCVB/',
	field : '7AiWUMN6tQZhrwuT',
	text : 'wRZiaUOF9DgtlBqC',
);
```