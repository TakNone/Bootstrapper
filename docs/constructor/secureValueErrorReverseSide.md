# secureValueErrorReverseSide

**Description** : *Represents an issue with the reverse side of a document\. The error is considered resolved when the file with reverse side of the document changes*

**Layer** : 211

```tl
secureValueErrorReverseSide#868a2aa5 type:SecureValueType file_hash:bytes text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | One of secureValueTypeDriverLicense, secureValueTypeIdentityCard |
| <mark>file_hash</mark> | [`bytes`](type/bytes) | File hash |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueErrorReverseSide(
	type : $client->secureValueTypePersonalDetails(),
	file_hash : '싥?LiveProto?v?',
	text : '48dnvz2hitTDuwWS',
);
```