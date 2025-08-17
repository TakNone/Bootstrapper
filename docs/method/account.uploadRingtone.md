# account.uploadRingtone

**Description** : *Upload notification sound, use account.saveRingtone to convert it and add it to the list of saved notification sounds*

**Layer** : 211

```tl
account.uploadRingtone#831a83a2 file:InputFile file_name:string mime_type:string = Document;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>file</mark> | [`InputFile`](type/InputFile) | Notification sound |
| <mark>file_name</mark> | [`string`](type/string) | File name |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of file |

---

## Result

[Document](type/Document)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **RINGTONE_MIME_INVALID** | `400` | The MIME type for the ringtone is invalid |

---

## Example

```php
$document = $client->account->uploadRingtone(
	file : $client->inputFile(
		id : -3312858666598660862,
		parts : 20,
		name : 'xuVMto9lAkmKULhf',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	file_name : 'fWxjmCQOw75an4iN',
	mime_type : 'KX0zW3vfbHMudOCD',
);
```