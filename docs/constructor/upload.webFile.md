# upload.webFile

**Description** : *Represents a chunk of an HTTP webfile downloaded through telegram&#039;s secure MTProto servers*

**Layer** : 214

```tl
upload.webFile#21e753bc size:int mime_type:string file_type:storage.FileType mtime:int bytes:bytes = upload.WebFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | Mime type |
| <mark>file_type</mark> | [`storage.FileType`](type/storage.FileType) | File type |
| <mark>mtime</mark> | [`int`](type/int) | Modified time |
| <mark>bytes</mark> | [`bytes`](type/bytes) | Data |

---

## Type

[upload.WebFile](type/upload.WebFile)

---

## Example

```php
$uploadWebFile = $client->upload->webFile(
	size : 58,
	mime_type : 'ZFyqep62PUQJHD7z',
	file_type : $client->storage->fileUnknown(),
	mtime : 16,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```