# account.uploadRingtone

**Description** : *Upload notification sound, use account\.saveRingtone to convert it and add it to the list of saved notification sounds*

**Layer** : 214

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
		id : -3112167369028950741,
		parts : 15,
		name : 'kg2QMnDuFcWpwX6f',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	file_name : 'rZRicaVW9EoAFOk2',
	mime_type : 'UAviX917jq35zs2J',
);
```