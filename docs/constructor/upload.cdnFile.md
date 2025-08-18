# upload.cdnFile

**Description** : *Represent a chunk of a CDN file*

**Layer** : 211

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
	bytes : '????LiveProto?Wj\\',
);
```