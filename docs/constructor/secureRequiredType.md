# secureRequiredType

**Description** : *Required type*

**Layer** : 211

```tl
secureRequiredType#829d99da flags:# native_names:flags.0?true selfie_required:flags.1?true translation_required:flags.2?true type:SecureValueType = SecureRequiredType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **native_names** | [`flags.0?true`](type/true) | Native names |
| **selfie_required** | [`flags.1?true`](type/true) | Is a selfie required |
| **translation_required** | [`flags.2?true`](type/true) | Is a translation required |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | Secure value type |

---

## Type

[SecureRequiredType](type/SecureRequiredType)

---

## Example

```php
$secureRequiredType = $client->secureRequiredType(
	native_names : true,
	selfie_required : true,
	translation_required : true,
	type : $client->secureValueTypePersonalDetails(),
);
```