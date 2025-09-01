# upload.file

**Description** : *File content*

**Layer** : 214

```tl
upload.file#96a18d5 type:storage.FileType mtime:int bytes:bytes = upload.File;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>type</mark> | [`storage.FileType`](type/storage.FileType) | File type |
| <mark>mtime</mark> | [`int`](type/int) | Modification time |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Binary data, file content |

---

## Type

[upload.File](type/upload.File)

---

## Example

```php
$uploadFile = $client->upload->file(
	type : $client->storage->fileUnknown(),
	mtime : 47,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```