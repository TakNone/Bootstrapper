# secureValueErrorTranslationFiles

**Description** : *Represents an issue with the translated version of a document\. The error is considered resolved when a file with the document translation changes*

**Layer** : 218

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
	file_hash : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	text : 'y8mePDiFJHv9EQXj',
);
```