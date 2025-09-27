# secureValueErrorFile

**Description** : *Represents an issue with a document scan\. The error is considered resolved when the file with the document scan changes*

**Layer** : 216

```tl
secureValueErrorFile#7a700873 type:SecureValueType file_hash:bytes text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | One of secureValueTypeUtilityBill, secureValueTypeBankStatement, secureValueTypeRentalAgreement, secureValueTypePassportRegistration, secureValueTypeTemporaryRegistration |
| <mark>file_hash</mark> | [`bytes`](type/bytes) | File hash |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueErrorFile(
	type : $client->secureValueTypePersonalDetails(),
	file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	text : 'b1KXemBaVWg5rij2',
);
```