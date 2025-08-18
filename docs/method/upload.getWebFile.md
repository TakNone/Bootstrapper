# upload.getWebFile

**Description** : *Returns content of a web file, by proxying the request through telegram, see the webfile docs for more info*

**Layer** : 211

```tl
upload.getWebFile#24e6818d location:InputWebFileLocation offset:int limit:int = upload.WebFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>location</mark> | [`InputWebFileLocation`](type/InputWebFileLocation) | The file to download |
| <mark>offset</mark> | [`int`](type/int) | Number of bytes to be skipped |
| <mark>limit</mark> | [`int`](type/int) | Number of bytes to be returned |

---

## Result

[upload.WebFile](type/upload.WebFile)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **LOCATION_INVALID** | `400` | The provided location is invalid |

---

## Example

```php
$uploadWebFile = $client->upload->getWebFile(
	location : $client->inputWebFileLocation(
		url : 'https://docs.liveproto.dev',
		access_hash : 5682232950425546126,
	),
	offset : 23,
	limit : 85,
);
```