# encryptedFile

**Description** : *Encrypted file*

**Layer** : 222

```tl
encryptedFile#a8008cd8 id:long access_hash:long size:long dc_id:int key_fingerprint:int = EncryptedFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | File ID |
| <mark>access_hash</mark> | [`long`](type/long) | Checking sum depending on user ID |
| <mark>size</mark> | [`long`](type/long) | File size in bytes |
| <mark>dc_id</mark> | [`int`](type/int) | Number of data center |
| <mark>key_fingerprint</mark> | [`int`](type/int) | 32-bit fingerprint of key used for file encryption |

---

## Type

[EncryptedFile](type/EncryptedFile)

---

## Example

```php
$encryptedFile = $client->encryptedFile(
	id : 857838225937651166,
	access_hash : -1912921660733310002,
	size : -4265498791440258858,
	dc_id : 82,
	key_fingerprint : 46,
);
```