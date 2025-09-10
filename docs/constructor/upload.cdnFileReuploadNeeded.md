# upload.cdnFileReuploadNeeded

**Description** : *The file was cleared from the temporary RAM cache of the CDN and has to be re\-uploaded*

**Layer** : 214

```tl
upload.cdnFileReuploadNeeded#eea8e46e request_token:bytes = upload.CdnFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>request_token</mark> | [`bytes`](type/bytes) | Request token (see CDN) |

---

## Type

[upload.CdnFile](type/upload.CdnFile)

---

## Example

```php
$uploadCdnFile = $client->upload->cdnFileReuploadNeeded(
	request_token : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```