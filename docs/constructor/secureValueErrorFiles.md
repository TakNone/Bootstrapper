# secureValueErrorFiles

**Description** : *Represents an issue with a list of scans\. The error is considered resolved when the list of files containing the scans changes*

**Layer** : 211

```tl
secureValueErrorFiles#666220e9 type:SecureValueType file_hash:Vector<bytes> text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | One of secureValueTypeUtilityBill, secureValueTypeBankStatement, secureValueTypeRentalAgreement, secureValueTypePassportRegistration, secureValueTypeTemporaryRegistration |
| <mark>file_hash</mark> | [`Vector<bytes>`](type/bytes) | File hash |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueErrorFiles(
	type : $client->secureValueTypePersonalDetails(),
	file_hash : array('J??)?LiveProto' . "\0" . 'y??'),
	text : 'aLrGDumISgyHUFJ0',
);
```