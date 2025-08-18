# upload.fileCdnRedirect

**Description** : *The file must be downloaded from a CDN DC*

**Layer** : 211

```tl
upload.fileCdnRedirect#f18cda44 dc_id:int file_token:bytes encryption_key:bytes encryption_iv:bytes file_hashes:Vector<FileHash> = upload.File;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc_id</mark> | [`int`](type/int) | CDN DC ID |
| <mark>file_token</mark> | [`bytes`](type/bytes) | File token (see CDN files) |
| <mark>encryption_key</mark> | [`bytes`](type/bytes) | Encryption key (see CDN files) |
| <mark>encryption_iv</mark> | [`bytes`](type/bytes) | Encryption IV (see CDN files) |
| <mark>file_hashes</mark> | [`Vector<FileHash>`](type/FileHash) | File hashes (see CDN files) |

---

## Type

[upload.File](type/upload.File)

---

## Example

```php
$uploadFile = $client->upload->fileCdnRedirect(
	dc_id : 75,
	file_token : '???]"LiveProtox?6?)',
	encryption_key : '?Y??LiveProtoF??1?',
	encryption_iv : 'fݳ??LiveProto?v??b',
	file_hashes : array(
		$client->fileHash(
			offset : 5526848514267060357,
			limit : 35,
			hash : '?ČMGLiveProto??Mn?',
		),
	),
);
```