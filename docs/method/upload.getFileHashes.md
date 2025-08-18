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
		volume_id : 3538563593973179852,
		local_id : 10,
		secret : -2317289405911385915,
		file_reference : '??ށLiveProto?#z\'',
	),
	offset : 6731698311325994161,
);
```