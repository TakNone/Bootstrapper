# upload.getFileHashes

**Description** : *Get SHA256 hashes for verifying downloaded files*

**Layer** : 218

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
		volume_id : 2466889391272387619,
		local_id : 16,
		secret : -7698048154458500980,
		file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	offset : 0,
);
```