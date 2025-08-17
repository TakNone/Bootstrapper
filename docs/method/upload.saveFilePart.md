# upload.saveFilePart

**Description** : *Saves a part of file for further sending to one of the methods*

**Layer** : 211

```tl
upload.saveFilePart#b304a621 file_id:long file_part:int bytes:bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file_id</mark> | [`long`](type/long) | Random file identifier created by the client |
| <mark>file_part</mark> | [`int`](type/int) | Numerical order of a part |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Binary data, content of a part |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILE_PART_EMPTY** | `400` | The provided file part is empty |
| **FILE_PART_INVALID** | `400` | The file part number is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$bool = $client->upload->saveFilePart(
	file_id : -8503394839212173919,
	file_part : 5,
	bytes : '????LiveProto>O??',
);
```