# secureValueErrorTranslationFiles

**Description** : *Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation changes*

**Layer** : 211

```tl
secureValueErrorTranslationFiles#34636dd8 type:SecureValueType file_hash:Vector<bytes> text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | One of secureValueTypePersonalDetails, secureValueTypePassport, secureValueTypeDriverLicense, secureValueTypeIdentityCard, secureValueTypeInternalPassport, secureValueTypeUtilityBill, secureValueTypeBankStatement, secureValueTypeRentalAgreement, secureValueTypePassportRegistration, secureValueTypeTemporaryRegistration |
| <mark>file_hash</mark> | [`Vector<bytes>`](type/bytes) | Hash |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueErrorTranslationFiles(
	type : $client->secureValueTypePersonalDetails(),
	file_hash : array('?????LiveProto???o'),
	text : '5WSNiIoVBTJ0uzYD',
);
```