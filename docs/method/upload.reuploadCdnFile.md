# upload.reuploadCdnFile

**Description** : *Request a reupload of a certain file to a CDN DC*

**Layer** : 214

```tl
upload.reuploadCdnFile#9b2754a8 file_token:bytes request_token:bytes = Vector<FileHash>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file_token</mark> | [`bytes`](type/bytes) | File token |
| <mark>request_token</mark> | [`bytes`](type/bytes) | Request token |

---

## Result

[Vector<FileHash>](type/FileHash)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CDN_METHOD_INVALID** | `400` | You can't call this method in a CDN DC |
| **CDN_UPLOAD_TIMEOUT** | `500` | A server-side timeout occurred while reuploading the file to the CDN DC |
| **FILE_TOKEN_INVALID** | `400` | The master DC did not accept the file_token (e.g., the token has expired). Continue downloading the file from the master DC using upload.getFile |
| **LOCATION_INVALID** | `400` | The provided location is invalid |
| **REQUEST_TOKEN_INVALID** | `400` | The master DC did not accept the request_token from the CDN DC. Continue downloading the file from the master DC using upload.getFile |
| **RSA_DECRYPT_FAILED** | `400` | Internal RSA decryption failed |

---

## Example

```php
$fileHash = $client->upload->reuploadCdnFile(
	file_token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	request_token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```