# upload.getFileHashes

**Description** : *Get SHA256 hashes for verifying downloaded files*

**Layer** : 211

```tl
upload.getFileHashes#9156982a location:InputFileLocation offset:long = Vector<FileHash>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>location</mark> | [`InputFileLocation`](type/InputFileLocation) | File |
| <mark>offset</mark> | [`long`](type/long) | Offset from which to get file hashes |

---

## Result

[Vector<FileHash>](type/FileHash)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **LOCATION_INVALID** | `400` | The provided location is invalid |

---

## Example

```php
$fileHash = $client->upload->getFileHashes(
	location : $client->inputFileLocation(
		volume_id : 8299198664153025960,
		local_id : 76,
		secret : -1848441084322608473,
		file_reference : 'g7??LiveProto?`?I',
	),
	offset : 7951551605102563291,
);
```