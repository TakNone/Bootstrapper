# fileHash

**Description** : *SHA256 Hash of an uploaded file, to be checked for validity after download*

**Layer** : 211

```tl
fileHash#f39b035c offset:long limit:int hash:bytes = FileHash;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`long`](type/long) | Offset from where to start computing SHA-256 hash |
| <mark>limit</mark> | [`int`](type/int) | Length |
| <mark>hash</mark> | [`bytes`](type/bytes) | SHA-256 Hash of file chunk, to be checked for validity after download |

---

## Type

[FileHash](type/FileHash)

---

## Example

```php
$fileHash = $client->fileHash(
	offset : -7782687788525987217,
	limit : 12,
	hash : '̯?
"LiveProtoN/l]',
);
```