# secureValueHash

**Description** : *Secure value hash*

**Layer** : 211

```tl
secureValueHash#ed1ecdb0 type:SecureValueType hash:bytes = SecureValueHash;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`SecureValueType`](type/SecureValueType) | Secure value type |
| <mark>hash</mark> | [`bytes`](type/bytes) | Hash |

---

## Type

[SecureValueHash](type/SecureValueHash)

---

## Example

```php
$secureValueHash = $client->secureValueHash(
	type : $client->secureValueTypePersonalDetails(),
	hash : '?@8LiveProto??n?',
);
```