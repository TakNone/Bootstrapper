# secureValueErrorFrontSide

**Description** : *Represents an issue with the front side of a document\. The error is considered resolved when the file with the front side of the document changes*

**Layer** : 216

```tl
secureValueErrorFrontSide#be3dfa type:SecureValueType file_hash:bytes text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | One of secureValueTypePassport, secureValueTypeDriverLicense, secureValueTypeIdentityCard, secureValueTypeInternalPassport |
| <mark>file_hash</mark> | [`bytes`](type/bytes) | File hash |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueErrorFrontSide(
	type : $client->secureValueTypePersonalDetails(),
	file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	text : 'GT65ZbUnqNAP7BWX',
);
```