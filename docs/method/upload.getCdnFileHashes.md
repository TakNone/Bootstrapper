# upload.getCdnFileHashes

**Description** : *Get SHA256 hashes for verifying downloaded CDN files*

**Layer** : 211

```tl
upload.getCdnFileHashes#91dc3f31 file_token:bytes offset:long = Vector<FileHash>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file_token</mark> | [`bytes`](type/bytes) | File |
| <mark>offset</mark> | [`long`](type/long) | Offset from which to start getting hashes |

---

## Result

[Vector<FileHash>](type/FileHash)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CDN_METHOD_INVALID** | `400` | You can't call this method in a CDN DC |
| **FILE_TOKEN_INVALID** | `400` | The master DC did not accept the file_token (e.g., the token has expired). Continue downloading the file from the master DC using upload.getFile |
| **RSA_DECRYPT_FAILED** | `400` | Internal RSA decryption failed |

---

## Example

```php
$fileHash = $client->upload->getCdnFileHashes(
	file_token : 'zrJLiveProto2??X',
	offset : -7690751044495986023,
);
```