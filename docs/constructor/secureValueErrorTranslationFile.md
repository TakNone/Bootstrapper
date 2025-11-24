# secureValueErrorTranslationFile

**Description** : *Represents an issue with one of the files that constitute the translation of a document\. The error is considered resolved when the file changes*

**Layer** : 218

```tl
secureValueErrorTranslationFile#a1144770 type:SecureValueType file_hash:bytes text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | One of secureValueTypePersonalDetails, secureValueTypePassport, secureValueTypeDriverLicense, secureValueTypeIdentityCard, secureValueTypeInternalPassport, secureValueTypeUtilityBill, secureValueTypeBankStatement, secureValueTypeRentalAgreement, secureValueTypePassportRegistration, secureValueTypeTemporaryRegistration |
| <mark>file_hash</mark> | [`bytes`](type/bytes) | File hash |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueErrorTranslationFile(
	type : $client->secureValueTypePersonalDetails(),
	file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	text : 'h5FVkaNZsHbgmP7u',
);
```