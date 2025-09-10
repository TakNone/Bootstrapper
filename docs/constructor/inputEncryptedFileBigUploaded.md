# inputEncryptedFileBigUploaded

**Description** : *Assigns a new big encrypted file \(over 10 MB in size\), saved in parts using the method upload\.saveBigFilePart*

**Layer** : 214

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
	id : -2351141274474179800,
	parts : 9,
	key_fingerprint : 9,
);
```