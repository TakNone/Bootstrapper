# secureData

**Description** : *Secure passport data, for more info see the passport docs »*

**Layer** : 211

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
	data : 'g???LiveProtowd??~',
	data_hash : '?m?&?LiveProto??',
	secret : 'b?	?LiveProto?Ï',
);
```