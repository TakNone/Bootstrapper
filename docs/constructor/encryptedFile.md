# encryptedFile

**Description** : *Encrypted file*

**Layer** : 218

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
	id : -5793323863204229062,
	access_hash : -7566375749480884000,
	size : 7649948604288890791,
	dc_id : 7,
	key_fingerprint : 96,
);
```