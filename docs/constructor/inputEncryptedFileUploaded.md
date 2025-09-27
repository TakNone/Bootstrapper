# inputEncryptedFileUploaded

**Description** : *Sets new encrypted file saved by parts using upload\.saveFilePart method*

**Layer** : 216

```tl
inputEncryptedFileUploaded#64bd0306 id:long parts:int md5_checksum:string key_fingerprint:int = InputEncryptedFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Random file ID created by client |
| <mark>parts</mark> | [`int`](type/int) | Number of saved parts |
| <mark>md5_checksum</mark> | [`string`](type/string) | In case md5-HASH of the (already encrypted) file was transmitted, file content will be checked prior to use |
| <mark>key_fingerprint</mark> | [`int`](type/int) | 32-bit fingerprint of the key used to encrypt a file |

---

## Type

[InputEncryptedFile](type/InputEncryptedFile)

---

## Example

```php
$inputEncryptedFile = $client->inputEncryptedFileUploaded(
	id : 5800898430032881720,
	parts : 53,
	md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	key_fingerprint : 87,
);
```