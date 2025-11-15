# secureValueError

**Description** : *Secure value error*

**Layer** : 216

```tl
secureValueError#869d758f type:SecureValueType hash:bytes text:string = SecureValueError;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | Type of element which has the issue |
| <mark>hash</mark> | [`bytes`](type/bytes) | Hash |
| <mark>text</mark> | [`string`](type/string) | Error message |

---

## Type

[SecureValueError](type/SecureValueError)

---

## Example

```php
$secureValueError = $client->secureValueError(
	type : $client->secureValueTypePersonalDetails(),
	hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	text : 'UOE1edTQ8iqzcGND',
);
```