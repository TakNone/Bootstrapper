# secureData

**Description** : *Secure passport data, for more info see the passport docs &raquo;*

**Layer** : 218

```tl
secureData#8aeabec3 data:bytes data_hash:bytes secret:bytes = SecureData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>data</mark> | [`bytes`](type/bytes) | Data |
| <mark>data_hash</mark> | [`bytes`](type/bytes) | Data hash |
| <mark>secret</mark> | [`bytes`](type/bytes) | Secret |

---

## Type

[SecureData](type/SecureData)

---

## Example

```php
$secureData = $client->secureData(
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	data_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```