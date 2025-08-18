# secureValueErrorSelfie

**Description** : *Represents an issue with the selfie with a document\. The error is considered resolved when the file with the selfie changes*

**Layer** : 211

```tl
secureValueErrorSelfie#e537ced6 type:SecureValueType file_hash:bytes text:string = SecureValueError;
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
$secureValueError = $client->secureValueErrorSelfie(
	type : $client->secureValueTypePersonalDetails(),
	file_hash : 'ƺF??LiveProto???)?',
	text : 'vEtQpduXOJ16rUVk',
);
```