# messages.getDocumentByHash

**Description** : *Get a document by its SHA256 hash, mainly used for gifs*

**Layer** : 216

```tl
messages.getDocumentByHash#b1f2061f sha256:bytes size:long mime_type:string = Document;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sha256</mark> | [`bytes`](type/bytes) | SHA256 of file |
| <mark>size</mark> | [`long`](type/long) | Size of the file in bytes |
| <mark>mime_type</mark> | [`string`](type/string) | Mime type |

---

## Result

[Document](type/Document)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SHA256_HASH_INVALID** | `400` | The provided SHA256 hash is invalid |

---

## Example

```php
$document = $client->messages->getDocumentByHash(
	sha256 : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	size : 6260586783287524031,
	mime_type : '29qpVd14xFB0zv8n',
);
```