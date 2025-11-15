# upload.getFileHashes

**Description** : *Get SHA256 hashes for verifying downloaded files*

**Layer** : 216

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
		volume_id : -2851445842867465946,
		local_id : 9,
		secret : 810599119757624107,
		file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	offset : 0,
);
```