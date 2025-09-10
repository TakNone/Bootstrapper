# secureValueErrorReverseSide

**Description** : *Represents an issue with the reverse side of a document\. The error is considered resolved when the file with reverse side of the document changes*

**Layer** : 214

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
	file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	text : 'Jjnw9eMK73TaXqmY',
);
```