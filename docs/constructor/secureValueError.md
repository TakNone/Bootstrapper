# secureValueError

**Description** : *Secure value error*

**Layer** : 211

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
	hash : '?#?m?LiveProto??<',
	text : '8pyFgIOsCT6kdDZa',
);
```