# upload.cdnFile

**Description** : *Represent a chunk of a CDN file*

**Layer** : 216

```tl
upload.cdnFile#a99fca4f bytes:bytes = upload.CdnFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bytes</mark> | [`bytes`](type/bytes) | The data |

---

## Type

[upload.CdnFile](type/upload.CdnFile)

---

## Example

```php
$uploadCdnFile = $client->upload->cdnFile(
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```