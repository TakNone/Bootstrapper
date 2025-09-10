# upload.getCdnFile

**Description** : *Download a CDN file*

**Layer** : 214

```tl
upload.getCdnFile#395f69da file_token:bytes offset:long limit:int = upload.CdnFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file_token</mark> | [`bytes`](type/bytes) | File token |
| <mark>offset</mark> | [`long`](type/long) | Offset of chunk to download |
| <mark>limit</mark> | [`int`](type/int) | Length of chunk to download |

---

## Result

[upload.CdnFile](type/upload.CdnFile)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILE_TOKEN_INVALID** | `400` | The master DC did not accept the file_token (e.g., the token has expired). Continue downloading the file from the master DC using upload.getFile |

---

## Example

```php
$uploadCdnFile = $client->upload->getCdnFile(
	file_token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	offset : 0,
	limit : 50,
);
```