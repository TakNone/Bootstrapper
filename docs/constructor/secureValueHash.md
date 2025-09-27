# secureValueHash

**Description** : *Secure value hash*

**Layer** : 214

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
	hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```