# inputEncryptedFileBigUploaded

**Description** : *Assigns a new big encrypted file \(over 10 MB in size\), saved in parts using the method upload\.saveBigFilePart*

**Layer** : 216

```tl
inputEncryptedFileBigUploaded#2dc173c8 id:long parts:int key_fingerprint:int = InputEncryptedFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Random file id, created by the client |
| <mark>parts</mark> | [`int`](type/int) | Number of saved parts |
| <mark>key_fingerprint</mark> | [`int`](type/int) | 32-bit imprint of the key used to encrypt the file |

---

## Type

[InputEncryptedFile](type/InputEncryptedFile)

---

## Example

```php
$inputEncryptedFile = $client->inputEncryptedFileBigUploaded(
	id : 5466736133506501529,
	parts : 59,
	key_fingerprint : 54,
);
```