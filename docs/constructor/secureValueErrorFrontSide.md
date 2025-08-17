# secureValueErrorFrontSide

**Description** : *Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes*

**Layer** : 211

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
	file_hash : '<??УLiveProto???,',
	text : '8sBvSDUwLlFtu4an',
);
```